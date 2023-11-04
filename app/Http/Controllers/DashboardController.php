<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Charts\grafik;

class DashboardController extends Controller
{
    public function index(User $pengguna)
    {
        $UserChart = grafik::create('bar', 'highcharts')
        ->setTitle('Contoh Grafik Bar')
        ->setLabels(['Jan', 'Feb', 'Mar', 'Apr', 'Mei'])
        ->setValues([5, 10, 15, 20, 25]);
       

        $data_login = \App\Login::orderByRaw('created_at DESC')->limit(25)->get();
        $data_admin = \App\User::where('role', "admin")->get();
        $data_petugas = \App\Tendik::all();
        $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();

        return view('dashboard', compact('data_admin', 'data_login', 'data_pengumuman', 'data_petugas','UserChart', [ 'UserChart' => $UserChart]));
    }
    public function indexx(User $pengguna)
    {

        // $data_login = \App\Login::orderByRaw('created_at DESC')->limit(25)->get();
        $data_admin = \App\User::where('role', "admin")->get();
        // $data_petugas = \App\Tendik::all();
        // $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();
        return view('dashboardd', compact('data_admin', ));
    }

    public function siswadashboard(User $pengguna, $id)
    {
        // $pesdik = \App\User::where('id', $id)->get();
        // $id_pesdik_login = $pesdik->first();

        $data_login = \App\Login::orderByRaw('created_at DESC')->limit(20)->get();
        $data_admin = \App\User::where('role', "admin")->get();
        $data_petugas = \App\Tendik::all();
        $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();
        return view('dashboard', compact('data_admin', 'data_login', 'data_pengumuman', 'data_petugas', 'id_pesdik_login'));
    }
}
