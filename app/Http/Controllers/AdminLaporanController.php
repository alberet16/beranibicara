<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use PDF;

class AdminLaporanController extends Controller
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
        $cetakpdf = Pengaduan::all(); // Mengambil data dari model semua
        
    
    if ($cetakpdf) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        $pdf = PDF::loadview('laporanpengaduan.pengaduanall',['cetakpdf' => $cetakpdf])->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Pengaduan (All).pdf');
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $superadmin)
    {
        $cetakpdf = Pengaduan::where('id');
        
        $pdf = PDF::loadview('laporanpengaduanuser_pdf',['cetakpdf'=>$cetakpdf]);
        return $pdf->stream('laporan-pengaduan-pdf.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $cetak,$id)
    {
        $cetakpdf = Pengaduan::where('id',$id);
        
        $pdf = PDF::loadview('laporanpengaduanuser_pdf',['cetakpdf'=>$cetakpdf]);
        return $pdf->stream('laporan-pengaduan-pdf.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
