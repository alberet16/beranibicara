<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class AdminLaporanPerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = Laporan::latest()->paginate(7);
        return view ('superadmin.perjalanan.index',['perjalanan'=>$perjalanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('superadmin.perjalanan.tambah');
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
            'nama'=>'required',
            'tanggal'=>'required',
            'dasar'=>'required',
            'maksud'=>'required',
            'isi'=>'required',
            'pelapor'=>'required',
        ]);

        Laporan::create($input);
        return redirect()->route('laporan.index')->with('success','Laporan berhasil dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        return view('superadmin.perjalanan.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        return view ('superadmin.perjalanan.edit',compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'nama'=>'required',
            'tanggal'=>'required',
            'dasar'=>'required',
            'maksud'=>'required',
            'isi'=>'required',
            'pelapor'=>'required',
        ]);

        $input = $request->all();

        $laporan->update($input);

        return redirect()->route('laporan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.index');
    }
}
