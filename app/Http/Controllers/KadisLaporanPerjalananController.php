<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class KadisLaporanPerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kadisperjalanan = Laporan::latest()->paginate(7);
        return view ('admin.perjalanan.index',['kadisperjalanan'=>$kadisperjalanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.perjalanan.tambah');
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
        return redirect()->route('kadislaporan.index')->with('success','Laporan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $kadislaporan)
    {
        return view('admin.perjalanan.show',compact('kadislaporan'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $kadislaporan)
    {
        return view ('admin.perjalanan.edit',compact('kadislaporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $kadislaporan)
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

        $kadislaporan->update($input);

        return redirect()->route('kadislaporan.index')->with('success','Laporan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $kadislaporan)
    {
        $kadislaporan->delete();
        return redirect()->route('kadislaporan.index')->with('success','Laporan Berhasil Dihapus');
    }
   
}
