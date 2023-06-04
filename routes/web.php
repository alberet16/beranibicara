<?php

use Illuminate\Support\Facades\Route;
#iterasi 1
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AdminPengaduanController;
use App\Http\Controllers\AdminLaporanController;
#iterasi 2
use App\Http\Controllers\AdminPertemuanController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\RumahAmanController;
use App\Http\Controllers\AdminRumahAmanController;

#iterasi 3
use App\Http\Controllers\AdminTentangController;
use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\UserUnsignedController;
use App\Http\Controllers\AdminLaporanPerjalananController;
use App\Http\Controllers\KadisLaporanPerjalananController;
use App\Http\Controllers\AdminKategoriAcaraController;
use App\Http\Controllers\AdminAcaraController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminPendidikanSeksualController;
use App\Http\Controllers\AdminKategoriDukunganController;
use App\Http\Controllers\AdminDukunganController;
use App\Http\Controllers\AdminKategoriNomorController;
use App\Http\Controllers\AdminNomorController;
use App\Http\Controllers\LaporanPDFController;
use App\Http\Controllers\UserSignedController;
use App\Http\Controllers\PengaduanPDFController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/indexpengaduan', [UserUnsignedController::class, 'indexpengaduan'])->name('indexpengaduan');
Route::get('/user/indexpertemuan', [UserUnsignedController::class, 'indexpertemuan'])->name('indexpertemuan');
Route::get('/user/indexrumah', [UserUnsignedController::class, 'indexrumahaman'])->name('indexrumahaman');

//Berita
Route::get('/user/indexberita', [UserUnsignedController::class, 'indexberita'])->name('indexberita');
Route::get('/berita/data/{id}', [UserUnsignedController::class, 'showberita']);
Route::get('/berita/search', [UserUnsignedController::class, 'searchberita']);

//Dukungan
Route::get('/user/indexkategoridukungan', [UserUnsignedController::class, 'indexkategoridukungan'])->name('indexkategoridukungan');
Route::get('/objek-wisata/detail1/{id}', [UserUnsignedController::class, 'dukungan']);
Route::get('/dukungan/data/{id}', [UserUnsignedController::class, 'showdukungan']);
Route::get('/dukungan/search', [UserUnsignedController::class, 'searchkategoridukungan']);
Route::get('/dukungan/searchdukungan', [UserUnsignedController::class, 'searchdukungan']);
Route::get('/filter/dukungan', [UserUnsignedController::class, 'filterkategoridukungan']);

//Acara
Route::get('/user/indexkategoriacara', [UserUnsignedController::class, 'indexkategoriacara'])->name('indexkategoriacara');
Route::get('/acara/all/{id}', [UserUnsignedController::class, 'acara']);
Route::get('/acara/data/{id}', [UserUnsignedController::class, 'showacara']);
Route::get('/acara/search', [UserUnsignedController::class, 'searchkategoriacara']);
Route::get('/acara/searchacara', [UserUnsignedController::class, 'searchacara']);
Route::get('/filter/acara', [UserUnsignedController::class, 'filterkategoriacara']);

//Pendidikan Seksual
Route::get('/user/indexpendidikanseksual', [UserUnsignedController::class, 'indexpendidikanseksual'])->name('indexpendidikanseksual');
Route::get('/pendidikan/data/{id}', [UserUnsignedController::class, 'showpendidikanseksual']);
Route::get('/pendidikan/search', [UserUnsignedController::class, 'searchpendidikan']);
Route::get('/nomor/search', [UserUnsignedController::class, 'searchkategorinomor']);
Route::get('/nomor/searchnomor', [UserUnsignedController::class, 'searchnomor']);
Route::get('/filter/nomor', [UserUnsignedController::class, 'filterkategorinomor']);

//Nomor Penting
Route::get('/user/indexkategorinomor', [UserUnsignedController::class, 'indexkategorinomor'])->name('indexkategorinomor');
Route::get('/nomor/all/{id}', [UserUnsignedController::class, 'nomor']);

Route::get('/user/indextentangkami', [UserUnsignedController::class, 'indextentangkami'])->name('indextentangkami');

Route::get('/user/indexfasilitas', [UserUnsignedController::class, 'indexfasilitas'])->name('indexfasilitas');

Route::middleware(['auth', 'user-access:1'])->group(function () {
  

    Route::get('/masyarakat/indexrumah', [UserSignedController::class, 'indexrumahaman']);
    Route::get('/masyarakat/home', [HomeController::class, 'index'])->name('home');
    Route::resource('pengaduan', PengaduanController::class);
    Route::put('/pengaduan/cancel/{id}', [PengaduanController::class, 'cancelOrder']);
    Route::resource('rumah', PertemuanController::class);
    Route::put('/rumah/cancel/{id}', [PertemuanController::class, 'cancelOrder']);

    //Berita
    Route::get('/masyarakat/berita', [UserSignedController::class, 'indexberita']);
    Route::get('/masyarakat/berita/data/{id}', [UserSignedController::class, 'showberita']);
    Route::get('/masyarakat/berita/search', [UserSignedController::class, 'searchberita']);

    //Dukungan
    Route::get('/masyarakat/kategoridukungan', [UserSignedController::class, 'indexkategoridukungan']);
    Route::get('/masyarakat/objek-wisata/detail1/{id}', [UserSignedController::class, 'dukungan']);
    Route::get('/masyarakat/dukungan/data/{id}', [UserSignedController::class, 'showdukungan']);
    Route::get('/masyarakat/dukungan/search', [UserSignedController::class, 'searchkategoridukungan']);
    Route::get('/masyarakat/dukungan/searchdukungan', [UserSignedController::class, 'searchdukungan']);
    Route::get('/filter/dukungan', [UserSignedController::class, 'filterkategoridukungan']);

    //Acara
    Route::get('/masyarakat/kategoriacara', [UserSignedController::class, 'indexkategoriacara']);
    Route::get('/masyarakat/acara/all/{id}', [UserSignedController::class, 'acara']);
    Route::get('/masyarakat/acara/data/{id}', [UserSignedController::class, 'showacara']);
    Route::get('/masyarakat/acara/search', [UserSignedController::class, 'searchkategoriacara']);
    Route::get('/masyarakat/acara/searchacara', [UserSignedController::class, 'searchacara']);
    Route::get('/masyarakat/filter/acara', [UserSignedController::class, 'filterkategoriacara']);

    //Pendidikan Seksual
    Route::get('/masyarakat/pendidikanseksual', [UserSignedController::class, 'indexpendidikanseksual']);
    Route::get('/masyarakat/pendidikan/data/{id}', [UserSignedController::class, 'showpendidikanseksual']);
    Route::get('/masyarakat/pendidikan/search', [UserSignedController::class, 'searchpendidikan']);
    Route::get('/masyarakat/nomor/search', [UserSignedController::class, 'searchkategorinomor']);
    Route::get('/masyarakat/nomor/searchnomor', [UserSignedController::class, 'searchnomor']);
    Route::get('/filter/nomor', [UserSignedController::class, 'filterkategorinomor']);

    //Nomor Penting
    Route::get('/masyarakat/kategorinomor', [UserSignedController::class, 'indexkategorinomor']);
    Route::get('/masyarakat/nomor/all/{id}', [UserSignedController::class, 'nomor']);

    Route::get('/masyarakat/tentangkami', [UserSignedController::class, 'indextentangkami']);

    
Route::get('/masyarakat/indexfasilitas', [UserUnsignedController::class, 'indexfasilitas']);
});

// Petugas Routes

Route::middleware(['auth', 'user-access:2'])->group(function () {
  
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admindashboard');
    Route::resource('akun', AdminAkunController::class);
    Route::resource('kadislaporan', KadisLaporanPerjalananController::class);
    Route::resource('laporanpdf', AdminLaporanController::class);
    Route::get('/print/data/{id}', [LaporanPDFController::class, 'printlaporan']);
    Route::get('/printall/data', [LaporanPDFController::class, 'printalllaporan']);
    Route::get('/printselected/data', [LaporanPDFController::class, 'printselectedperjalanan']);
});  

// Super Admin Routes

Route::middleware(['auth', 'user-access:3'])->group(function () {
  
    Route::get('/superadmin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('superadmindashboard');
    Route::resource('superadmin', AdminPengaduanController::class);
    Route::resource('superpertemuan', AdminPertemuanController::class);
    Route::resource('supertentang', AdminTentangController::class);
    Route::resource('laporan', AdminLaporanPerjalananController::class);

    Route::resource('kategoriAcara', AdminKategoriAcaraController::class);
    Route::resource('superacara', AdminAcaraController::class);
    Route::resource('superberitum', AdminBeritaController::class);
    Route::resource('superpendidikan', AdminPendidikanSeksualController::class);
    Route::resource('kategoriDukungan', AdminKategoriDukunganController::class);
    Route::resource('superdukungan', AdminDukunganController::class);
    Route::resource('kategoriNomor', AdminKategoriNomorController::class);
    Route::resource('supernomor', AdminNomorController::class);
    //Cetak PDF
    Route::resource('cetakpdf', AdminLaporanController::class);
    Route::get('/printpengaduan/data/{id}', [PengaduanPDFController::class, 'printpengaduan']);
    Route::get('/printallpengaduan/data/{id}', [PengaduanPDFController::class, 'printallpengaduan']);

    Route::get('/printselectedpengaduan/data/', [PengaduanPDFController::class, 'printselectedlaporan']);
    
});  
