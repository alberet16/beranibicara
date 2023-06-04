<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\StatusPengaduan;
class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masyarakat.pengaduan');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::where('user_id', auth()->user()->id)->latest()->paginate(5);
        return view('masyarakat.pengaduan.riwayatpengaduan', [
            'pengaduan' => $pengaduan
        ]);
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
            //pelapor
            'nik_pelapor' => '',
            'nama_pelapor' => 'required',
            'usia_pelapor' => 'required',
            'alamat_pelapor' => 'required',
            'jenis_kelamin_pelapor' => 'required',
            'nomor_telepon' => 'required',

            //korban
            'nik_korban' => '',
            'nama_korban' => 'required',
            'nomor_telepon_korban' => 'required',
            'usia_korban' => 'required',
            'jenis_kelamin_korban' => 'required',
            'status_perkawinan' => 'required',
            'tindakan_kekerasan' => 'required',

            'tanggal_terjadi'=>'required',
            'alamat_kejadian' => 'required',
            'rumah'=>'required',
            'deskripsi' => 'max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $input['user_id'] = auth()->user()->id;
        
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Pengaduan::create($input);

        Alert::success('Sukses', 'Laporan anda sudah dikirim!');
        return redirect()->route('pengaduan.create')->with('success', 'Laporan Akan Diproses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        return view('masyarakat.pengaduan.show',compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        return view('masyarakat.pengaduan.edit',compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        
        $request->validate([

              //pelapor
              'nik_pelapor' => '',
              'nama_pelapor' => 'required',
              'usia_pelapor' => 'required',
              'alamat_pelapor' => 'required',
              'jenis_kelamin_pelapor' => 'required',
              'nomor_telepon' => 'required',
  
              //korban
              'nik_korban' => '',
              'nama_korban' => 'required',
              'nomor_telepon_korban' => 'required',
              'usia_korban' => 'required',
              'jenis_kelamin_korban' => 'required',
              'status_perkawinan' => 'required',
              'tindakan_kekerasan' => 'required',
  

            'tanggal_terjadi' => 'required',
            'alamat_kejadian' => 'required',
            'rumah' => 'required',
            'deskripsi' => 'required',
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
          
        $pengaduan->update($input);
    
        return redirect()->route('pengaduan.create')
                        ->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */   
    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();
     
        return redirect()->route('pengaduan.create')
                        ->with('success','Data berhasil dihapus');
    }

    public function cancelOrder($id)
    {
        //CARI DATA ORDER BERDASARKAN ID
        $pengaduan = Pengaduan::find($id);
        //UBAH STATUSNYA MENJADI 4
        $pengaduan->update(['status_id' => 5]);
        //REDIRECT KEMBALI DENGAN MENAMPILKAN ALERT SUCCESS
        return redirect()->back()->with(['success' => 'Pengaduan Dibatalkan']);
    }
}
