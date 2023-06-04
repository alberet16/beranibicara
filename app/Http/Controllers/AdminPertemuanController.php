<?php

namespace App\Http\Controllers;

use App\Models\Pertemuan;
use Illuminate\Http\Request;
use App\Models\StatusPengaduan;
use PDF;


class AdminPertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superpertemuan = Pertemuan::latest()->paginate(3)->withQueryString();
        return view('superadmin.rumahaman.indexRumah', [
            'superpertemuan' => $superpertemuan
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
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function show(Pertemuan $superpertemuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertemuan $superpertemuan)
    {
        $status = StatusPengaduan::all();
        return view('superadmin.rumahaman.editRumah',compact('superpertemuan','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertemuan $superpertemuan)
    {
            $request -> validate([
                'name'=>'required',
                'nomor_telepon'=>'required',
                'rencana_temu'=>'required',
                'keperluan_temu'=>'required',
            ]);

            $input = $request->all();
            $superpertemuan->update($input);

            return redirect()->route('superpertemuan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertemuan $superpertemuan)
    {
        $superpertemuan->delete();
     
        return redirect()->route('superpertemuan.index')
                        ->with('success','Data berhasil dihapus');
    }
}
