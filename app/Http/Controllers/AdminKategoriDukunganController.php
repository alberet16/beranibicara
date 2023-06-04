<?php

namespace App\Http\Controllers;

use App\Models\KategoriDukungan;
use Illuminate\Http\Request;

class AdminKategoriDukunganController extends Controller
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
        return view ('superadmin.dukungan.tambahkategori');
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
        KategoriDukungan::create($input);
        return redirect()->route('superdukungan.index')->with('success','Laporan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriDukungan  $kategoriDukungan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriDukungan $kategoriDukungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriDukungan  $kategoriDukungan
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriDukungan $kategoriDukungan)
    {
        return view ('superadmin.dukungan.editkategori',compact('kategoriDukungan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriDukungan  $kategoriDukungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriDukungan $kategoriDukungan)
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

        $kategoriDukungan->update($input);
        return redirect()->route('superdukungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriDukungan  $kategoriDukungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriDukungan $kategoriDukungan)
    {
        $kategoriDukungan->delete();
        return redirect()->route('superdukungan.index');
    }
}
