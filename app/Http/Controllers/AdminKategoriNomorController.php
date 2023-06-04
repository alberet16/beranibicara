<?php

namespace App\Http\Controllers;

use App\Models\KategoriNomor;
use Illuminate\Http\Request;

class AdminKategoriNomorController extends Controller
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
        return view ('superadmin.nomor.tambahkategori');
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
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        KategoriNomor::create($input);
        return redirect()->route('supernomor.index')->with('success','Laporan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriNomor  $kategoriNomor
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriNomor $kategoriNomor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriNomor  $kategoriNomor
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriNomor $kategoriNomor)
    {
        return view ('superadmin.nomor.editkategori',compact('kategoriNomor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriNomor  $kategoriNomor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriNomor $kategoriNomor)
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

        $kategoriNomor->update($input);
        return redirect()->route('supernomor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriNomor  $kategoriNomor
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriNomor $kategoriNomor)
    {
        $kategoriNomor->delete();
        return redirect()->route('supernomor.index');
    }
}
