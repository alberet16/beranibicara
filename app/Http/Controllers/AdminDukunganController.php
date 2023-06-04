<?php

namespace App\Http\Controllers;
use App\Models\KategoriDukungan;
use App\Models\Dukungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminDukunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriDukungan = KategoriDukungan::latest()->paginate(3);
        $superdukungan = DB::table('dukungans')
            ->select('dukungans.*', 'kategoris_dukungans.kategori')
            ->join('kategoris_dukungans', 'kategoris_dukungans.id', '=', 'dukungans.category')->get();
        return view ('superadmin.dukungan.index',compact('kategoriDukungan','superdukungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriDukungan = KategoriDukungan::all();
        return view ('superadmin.dukungan.tambahdukungan',compact('kategoriDukungan'));
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

        Dukungan::create($input);
        return redirect()->route('superdukungan.index')->with('success', 'Laporan Akan Diproses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dukungan  $dukungan
     * @return \Illuminate\Http\Response
     */
    public function show(Dukungan $superdukungan)
    {
        $kategoriDukungan = KategoriDukungan::all();
        return view ('superadmin.dukungan.showdukungan', compact('kategoriAcara','superdukungan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dukungan  $dukungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Dukungan $superdukungan)
    {
        $kategoriDukungan = KategoriDukungan::all();
        return view ('superadmin.dukungan.editdukungan', compact('kategoriDukungan','superdukungan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dukungan  $dukungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dukungan $superdukungan)
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
          
        $superdukungan->update($input);
    
        return redirect()->route('superdukungan.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dukungan  $dukungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dukungan $dukungan)
    {
        $superdukungan->delete();
     
        return redirect()->route('superdukungan.index')
                        ->with('success','Data berhasil dihapus');
    }
}
