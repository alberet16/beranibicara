<?php

namespace App\Http\Controllers;

use App\Models\Nomor;
use Illuminate\Http\Request;
use App\Models\KategoriNomor;
use Illuminate\Support\Facades\DB;

class AdminNomorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriNomor = KategoriNomor::latest()->paginate(3);
        $supernomor = DB::table('nomors')
            ->select('nomors.*', 'kategoris_nomors.kategori')
            ->join('kategoris_nomors', 'kategoris_nomors.id', '=', 'nomors.category')->get();
        return view ('superadmin.nomor.index',compact('kategoriNomor','supernomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriNomor = KategoriNomor::all();
        return view ('superadmin.nomor.tambahnomor',compact('kategoriNomor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'judul'=>'required',
            'nomor'=>'required',
            'alamat' => 'required',
            'category' => 'required',
        ]);

        Nomor::create($input);
        return redirect()->route('supernomor.index')->with('success', 'Laporan Akan Diproses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function show(Nomor $supernomor)
    {
        $kategoriNomor = KategoriNomor::all();
        return view ('superadmin.nomor.shownomor', compact('kategoriNomor','supernomor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function edit(Nomor $supernomor)
    {
        $kategoriNomor = KategoriNomor::all();
        return view ('superadmin.nomor.editnomor', compact('kategoriNomor','supernomor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nomor $supernomor)
    {
        $request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'alamat' => 'required',
            'category' => 'required',
        ]);
  
        $input = $request->all();
          
        $supernomor->update($input);
    
        return redirect()->route('supernomor.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomor $supernomor)
    {
        $supernomor->delete();
     
        return redirect()->route('supernomor.index')
                        ->with('success','Data berhasil dihapus');
    }
}
