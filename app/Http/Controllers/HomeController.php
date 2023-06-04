<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('masyarakat/home');
    }
    public function adminDashboard()
    {
        return view('admin/admindashboard');
    }

    public function superAdminDashboard()
    {
        $pengaduanCount = DB::table('pengaduans')->count();
        $pertemuanCount = DB::table('pertemuans')->count();
        return view('superadmin/superadmindashboard',compact('pengaduanCount','pertemuanCount'));
    }

}
