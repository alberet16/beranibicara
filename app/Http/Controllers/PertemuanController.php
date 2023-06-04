<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use App\Models\StatusPengaduan;
use RealRashid\SweetAlert\Facades\Alert;

class PertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masyarakat.rumahaman.indexrumah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $rumah = Pertemuan::where('user_id', auth()->user()->id)->latest()->paginate(5);
        Alert::success('Sukses', 'Data berhasil disimpan!');
        return view('masyarakat.rumahaman.riwayat', [
            'rumah' => $rumah
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
            'name' => 'required',
            'nomor_telepon' => 'integer',
            'rencana_temu'=>'required',
            'keperluan_temu' => 'max:255',
        ]);

        $input['user_id'] = auth()->user()->id;

        Pertemuan::create($input);
        Alert::success('Sukses', 'Data berhasil disimpan!');
        return redirect()->route('rumah.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function show(Pertemuan $rumah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertemuan $rumah)
    {
        return view('masyarakat.rumahaman.editrumah',compact('rumah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertemuan $rumah)
    {
        $request->validate([
            'name' => 'required',
            'nomor_telepon' => 'required',
            'rencana_temu' => 'required',
            'keperluan_temu' => 'required',
        ]);

        $input = $request->all();
        $rumah->update($input);

        return redirect()->route('rumah.create')->with('succes','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertemuan $rumah)
    {
        //
    }

    public function cancelOrder($id)
    {
        //CARI DATA ORDER BERDASARKAN ID
        $rumah = Pertemuan::find($id);
        //UBAH STATUSNYA MENJADI 4
        $rumah->update(['status_id' => 5]);
        //REDIRECT KEMBALI DENGAN MENAMPILKAN ALERT SUCCESS
        return redirect()->back()->with(['success' => 'Pesanan Dikonfirmasi']);
    }
}
