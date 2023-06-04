<?php

namespace App\Http\Controllers;

use App\Models\PendidikanSeksual;
use Illuminate\Http\Request;

class AdminPendidikanSeksualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superpendidikan = PendidikanSeksual::latest()->paginate(5);
        return view('superadmin.pendidikan.index', compact('superpendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('superadmin.pendidikan.tambah');
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
        ]);

        $input['user_id'] = auth()->user()->id;

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        PendidikanSeksual::create($input);
        return redirect()->route('superpendidikan.index')->with('success', 'Laporan Akan Diproses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendidikanSeksual  $pendidikanSeksual
     * @return \Illuminate\Http\Response
     */
    public function show(PendidikanSeksual $superpendidikan)
    {
        return view('superadmin.pendidikan.show',compact('superpendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendidikanSeksual  $pendidikanSeksual
     * @return \Illuminate\Http\Response
     */
    public function edit(PendidikanSeksual $superpendidikan)
    {
        return view('superadmin.pendidikan.edit',compact('superpendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendidikanSeksual  $pendidikanSeksual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendidikanSeksual $superpendidikan)
    {
        $request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
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
          
        $superpendidikan->update($input);
    
        return redirect()->route('superpendidikan.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendidikanSeksual  $pendidikanSeksual
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendidikanSeksual $superpendidikan)
    {
        $superpendidikan->delete();
     
        return redirect()->route('superpendidikan.index')
                        ->with('success','Data berhasil dihapus');
    }
}
