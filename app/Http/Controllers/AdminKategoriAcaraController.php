<?php

namespace App\Http\Controllers;

use App\Models\KategoriAcara;
use Illuminate\Http\Request;

class AdminKategoriAcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('superadmin.acara.tambahkategori');
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
            'kategori'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'kategori/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        KategoriAcara::create($input);
        return redirect()->route('superacara.index')->with('success','Laporan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriAcara  $kategoriAcara
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriAcara $kategoriAcara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriAcara  $kategoriAcara
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriAcara $kategoriAcara)
    {
        return view ('superadmin.acara.editkategori',compact('kategoriAcara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriAcara  $kategoriAcara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriAcara $kategoriAcara)
    {
        $request->validate([
            'kategori'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
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

        $kategoriAcara->update($input);

       
        return redirect()->route('superacara.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriAcara  $kategoriAcara
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriAcara $kategoriAcara)
    {
        $kategoriAcara->delete();
        return redirect()->route('superadmin.index');
    }
}
