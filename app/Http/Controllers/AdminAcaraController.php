<?php

namespace App\Http\Controllers;

use App\Models\KategoriAcara;
use App\Models\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $kategoriAcara = KategoriAcara::latest()->paginate(3);
        $superacara = DB::table('acaras')
            ->select('acaras.*', 'kategoris_acaras.kategori')
            ->join('kategoris_acaras', 'kategoris_acaras.id', '=', 'acaras.category')->get();
        return view ('superadmin.acara.index',compact('kategoriAcara','superacara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kategoriAcara = KategoriAcara::all();
        return view ('superadmin.acara.tambahacara',compact('kategoriAcara'));
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
            'keterangan'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'category' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Acara::create($input);
        return redirect()->route('superacara.index')->with('success', 'Laporan Akan Diproses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $superacara)
    {
        $kategoriAcara = KategoriAcara::all();
        return view ('superadmin.acara.showacara', compact('kategoriAcara','superacara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit(Acara $superacara)
    {
        $kategoriAcara = KategoriAcara::all();
        return view ('superadmin.acara.editacara', compact('kategoriAcara','superacara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acara $superacara)
    {
        $request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'category' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $superacara->update($input);
    
        return redirect()->route('superacara.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $superacara)
    {
        $superacara->delete();
     
        return redirect()->route('superacara.index')
                        ->with('success','Data berhasil dihapus');
    }
}
