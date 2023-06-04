<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\KategoriDukungan;
use App\Models\KategoriAcara;
use App\Models\KategoriNomor;
use App\Models\Dukungan;
use App\Models\Acara;
use App\Models\Nomor;
use App\Models\Tentang;
use App\Models\PendidikanSeksual;
class UserUnsignedController extends Controller
{
    public function indexpengaduan(){
        return view ('usertidakterdaftar.indexpengaduan');
    }

    public function indexrumahaman(){
        return view ('usertidakterdaftar.rumahaman');
    }

    public function indexpertemuan(){
        return view ('usertidakterdaftar.indexpertemuan');
    }

    //Berita
    public function indexberita(){
        $indexberita = DB::table('beritas')
        ->select('beritas.*', 'users.name')
        ->join('users', 'users.id', '=', 'beritas.user_id')->get();
        return view ('usertidakterdaftar.berita',compact('indexberita'));
    }

    public function showberita($id)
    {
    $indexberita = Berita::find($id);
    
    if ($indexberita) {  
        return view('usertidakterdaftar.halamanberita', ['indexberita' => $indexberita]);
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }
    
    }

    public function searchberita(Request $request)
    {
        $judul = $request->get('judul');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexberita = Berita::where('judul', 'like', '%'.$judul.'%')->get();
        return view ('usertidakterdaftar.berita',compact('indexberita'));
    }



    //Menampilkan seluruh kategori Dukungan

    public function indexkategoridukungan(){
        $indexkategoridukungan = KategoriDukungan::latest()->paginate(6);
        return view ('usertidakterdaftar.dukungan',compact('indexkategoridukungan'));
        
    }

    public function dukungan(Request $request, $id){
        $kategoridukungan = KategoriDukungan::find($id);
        $indexkategoridukungan =  DB::table('dukungans')
        ->select('dukungans.*', 'kategoris_dukungans.kategori')
        ->join('kategoris_dukungans', 'kategoris_dukungans.id', '=', 'dukungans.category')
        ->where('category', '=', $id)
        ->get();

        return view ('usertidakterdaftar.indexdukungan',compact('kategoridukungan','indexkategoridukungan'));
    }

    public function showdukungan($id)
    {
        $indexkategoridukungan = Dukungan::find($id); // Mengambil data dari model berdasarkan ID
        
        if ($indexkategoridukungan) {
            // Jika data ditemukan, tampilkan view dengan data tersebut
            return view('usertidakterdaftar.halamandukungan', ['indexkategoridukungan' => $indexkategoridukungan]);
        } else {
            // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Data not found.');
        }
        
    }

    public function searchkategoridukungan(Request $request)
    {
        $kategori = $request->get('kategori');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexkategoridukungan = KategoriDukungan::where('kategori', 'like', '%'.$kategori.'%')->get();
        return view ('usertidakterdaftar.dukungan',compact('indexkategoridukungan'));
    }

    public function searchdukungan(Request $request)
    {
        $judul = $request->get('judul');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexkategoridukungan = Dukungan::where('judul', 'like', '%'.$judul.'%')->get();
        return view ('usertidakterdaftar.indexdukungan',compact('indexkategoridukungan'));
    }


    public function filterkategoridukungan(Request $request)
    {
    $kategori = $request->get('kategori');
    // Lakukan logika filter yang sesuai, misalnya menggunakan metode where() pada model
    $indexkategoridukungan = KategoriDukungan::where('kategori', $kategori)->get();
    return view ('usertidakterdaftar.dukungan',compact('indexkategoridukungan'));
    }



    //Menampilkan halaman acara
    public function indexkategoriacara(){
        $indexkategoriacara = KategoriAcara::latest()->paginate(6);
        return view ('usertidakterdaftar.acara',compact('indexkategoriacara'));
        
    }

    public function searchkategoriacara(Request $request)
    {
        $kategori = $request->get('kategori');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexkategoriacara = KategoriAcara::where('kategori', 'like', '%'.$kategori.'%')->get();
        return view ('usertidakterdaftar.acara',compact('indexkategoriacara'));
    }


    public function acara(Request $request, $id){
        $kategoriacara = KategoriAcara::find($id);
        $indexkategoriacara =  DB::table('acaras')
        ->select('acaras.*', 'kategoris_acaras.kategori')
        ->join('kategoris_acaras', 'kategoris_acaras.id', '=', 'acaras.category')
        ->where('category', '=', $id)
        ->get();

        return view ('usertidakterdaftar.indexacara',compact('kategoriacara','indexkategoriacara'));
    }

    public function searchacara(Request $request)
    {
        $judul = $request->get('judul');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexkategoriacara = Acara::where('judul', 'like', '%'.$judul.'%')->get();
        return view ('usertidakterdaftar.indexacara',compact('indexkategoriacara'));
    }


    public function filterkategoriacara(Request $request)
    {
    $kategori = $request->get('kategori');
    // Lakukan logika filter yang sesuai, misalnya menggunakan metode where() pada model
    $indexkategoriacara = KategoriAcara::where('kategori', $kategori)->get();
    return view ('usertidakterdaftar.acara',compact('indexkategoriacara'));
    }


    public function showacara($id)
    {
        $indexkategoriacara = Acara::find($id); // Mengambil data dari model berdasarkan ID
    
    if ($indexkategoriacara) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        return view('usertidakterdaftar.halamanacara', ['indexkategoriacara' => $indexkategoriacara]);
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }
    
    }

    //Nomor Telepon Penting
    public function indexkategorinomor(){
        $indexkategorinomor = KategoriNomor::latest()->paginate(6);
        return view ('usertidakterdaftar.indexnomor',compact('indexkategorinomor'));     
    }

    public function nomor(Request $request, $id){
        $kategorinomor = KategoriNomor::find($id);
        $indexkategorinomor =  DB::table('nomors')
        ->select('nomors.*', 'kategoris_nomors.kategori')
        ->join('kategoris_nomors', 'kategoris_nomors.id', '=', 'nomors.category')
        ->where('category', '=', $id)
        ->get();

        return view ('usertidakterdaftar.halamannomor',compact('kategorinomor','indexkategorinomor'));
    }


    public function searchkategorinomor(Request $request)
    {
        $kategori = $request->get('kategori');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexkategorinomor = KategoriNomor::where('kategori', 'like', '%'.$kategori.'%')->get();
        return view ('usertidakterdaftar.indexnomor',compact('indexkategorinomor'));
    }

    public function searchnomor(Request $request)
    {
        $judul = $request->get('judul');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexkategorinomor = Nomor::where('judul', 'like', '%'.$judul.'%')->get();
        return view ('usertidakterdaftar.halamannomor',compact('indexkategorinomor'));
    }


    public function filterkategorinomor(Request $request)
    {
    $kategori = $request->get('kategori');
    // Lakukan logika filter yang sesuai, misalnya menggunakan metode where() pada model
    $indexkategorinomor = KategoriNomor::where('kategori', $kategori)->get();
    return view ('usertidakterdaftar.indexnomor',compact('indexkategorinomor'));
    }

    //Pendidikan Seksual
    public function indexpendidikanseksual(){
        $indexpendidikan = PendidikanSeksual::latest()->paginate(5);
        return view('usertidakterdaftar.indexpendidikan', compact('indexpendidikan'));
    }

    public function searchpendidikan(Request $request)
    {
        $judul = $request->get('judul');
        // Lakukan logika pencarian yang sesuai, misalnya menggunakan metode where() pada model
        $indexpendidikan = PendidikanSeksual::where('judul', 'like', '%'.$judul.'%')->get();
        return view ('usertidakterdaftar.indexpendidikan',compact('indexpendidikan'));
    }

    public function showpendidikanseksual($id)
    {
        $indexpendidikan = PendidikanSeksual::find($id); // Mengambil data dari model berdasarkan ID
    
    if ($indexpendidikan) {
        // Jika data ditemukan, tampilkan view dengan data tersebut
        return view('usertidakterdaftar.halamanpendidikan', ['indexpendidikan' => $indexpendidikan]);
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
        return redirect()->back()->with('error', 'Data not found.');
    }

    }


    public function indextentangkami(){
        $indextentangkami = Tentang::all();
        return view ('usertidakterdaftar.tentangkami',compact('indextentangkami'));     
    }

    public function indexfasilitas(){
        return view ('usertidakterdaftar.fasilitas');     
    }


}
