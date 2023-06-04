<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\StatusPengaduan;
use PDF;

class AdminPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superadmin = Pengaduan::latest()->paginate(5);
        return view('superadmin.pengaduan.indexPengaduan', [
            'superadmin' => $superadmin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Pengaduan $superadmin)
    {
        $status = StatusPengaduan::all();
        return view('superadmin.pengaduan.show',compact('superadmin','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $superadmin)
    {
        $status = StatusPengaduan::all();
        return view('superadmin.pengaduan.edit',compact('superadmin','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $superadmin)
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
            'alamat' => 'required',
            'deskripsi' => 'required',
            'status_id'=> 'required'
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
          
        $superadmin->update($input);
    
        return redirect()->route('superadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $superadmin)
    {
        $superadmin->delete();
     
        return redirect()->route('pengaduan.create')
                        ->with('success','Data berhasil dihapus');
    }
   
}
