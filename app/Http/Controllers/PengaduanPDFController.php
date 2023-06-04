<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use PDF;

class PengaduanPDFController extends Controller
{
    public function printpengaduan($id)
    {
        $pengaduan = Pengaduan::find($id); // Mengambil data dari model berdasarkan ID
        
    
    if ($pengaduan) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        $pdf = PDF::loadview('laporanpengaduan.pengaduan',['pengaduan' => $pengaduan])->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Pengaduan.pdf');
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }

    }

    
    public function printalllaporan()
    {
        $pengaduan = Pengaduan::all(); // Mengambil data dari model semua
        
    
    if ($pengaduan) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        $pdf = PDF::loadview('laporanpengaduan.pengaduanall',['pengaduan' => $pengaduan])->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Pengaduan (All).pdf');
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }

    }

    public function printselectedlaporan(Request $request) {
        $start_date = $request->input('start_date'); // Mendapatkan tanggal awal dari request
        $end_date = $request->input('end_date'); // Mendapatkan tanggal akhir dari request
    
        $cetakpdf = Pengaduan::whereBetween('created_at', [$start_date, $end_date])->get();
    
        if ($cetakpdf->isEmpty()) {
            // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Data not found.');
        } else {
            // Jika data ditemukan, tampilkan view dengan data tersebut
            $pdf = PDF::loadview('laporanpengaduan.pengaduanall', ['cetakpdf' => $cetakpdf])->setPaper('a4', 'landscape');
            $pdfContent = $pdf->stream('Laporan Perjalanan (Selected).pdf');
    
            return response($pdfContent, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="Laporan Perjalanan.pdf"');
        }
    }

}
