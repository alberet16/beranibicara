<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Pengaduan;
use PDF;

class LaporanPDFController extends Controller
{
    public function printlaporan($id)
    {
        $kadislaporan = Laporan::find($id); // Mengambil data dari model berdasarkan ID
        
    
    if ($kadislaporan) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        $pdf = PDF::loadview('laporanperjalanan.satulaporan',['kadislaporan' => $kadislaporan])->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Perjalanan.pdf');
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }

    }

    public function printalllaporan()
    {
        $kadislaporan = Laporan::all(); // Mengambil data dari model berdasarkan ID
        
    
    if ($kadislaporan) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        $pdf = PDF::loadview('laporanperjalanan.laporanperjalanan',['kadislaporan' => $kadislaporan])->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Perjalanan (All).pdf');
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }

    }

    public function printselectedperjalanan(Request $request) {
        $start_date = $request->input('start_date'); // Mendapatkan tanggal awal dari request
        $end_date = $request->input('end_date'); // Mendapatkan tanggal akhir dari request
    
        $kadislaporan = Laporan::whereBetween('created_at', [$start_date, $end_date])->get();
    
        if ($kadislaporan->isEmpty()) {
            // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Data not found.');
        } else {
            // Jika data ditemukan, tampilkan view dengan data tersebut
            $pdf = PDF::loadview('laporanperjalanan.laporanperjalanan', ['kadislaporan' => $kadislaporan])->setPaper('a4', 'landscape');
            $pdfContent = $pdf->stream('Laporan Pengaduan (Selected).pdf');
    
            return response($pdfContent, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="Laporan Pengaduan.pdf"');
        }
    }

    
}
