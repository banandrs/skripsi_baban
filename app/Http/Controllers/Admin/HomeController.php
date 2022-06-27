<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTestAddToLog()
    {
        LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }

    public function index()
    {
        $reservasi = $this->__queryUser();
        $paketFoto = $this->__queryPaketFoto();
        $promosi = $this->__queryPromosi();
        $userSiswa = $this->__queryUserSiswa();
        $userMahasiswa = $this->__queryUserMahaSiswa();
        $userWiraswasta = $this->__queryUserWiraswasta();
        $userAsn = $this->__queryUserAsn();
        $userLainnya = $this->__queryUserLainnya();
        return view(
            'admin/home',
            [
                'reservasi' => $reservasi,
                'paketFoto' => $paketFoto,
                'promosi' => $promosi,
                'userSiswa' => $userSiswa,
                'userMahasiswa' => $userMahasiswa,
                'userWiraswasta' => $userWiraswasta,
                'userAsn' => $userAsn,
                'userLainnya' => $userLainnya,
            ]
        );
    }

    ##RESERVASI
    private function __queryUser()
    {
        return DB::table('users')
            ->select('users.*')
            ->count();
    }
    ##PAKET FOTO
    private function __queryPaketFoto()
    {
        return DB::table('paket_fotos')
            ->select('paket_fotos.*')
            // ->where('users.role', '=', 'umkm_dagang')
            ->count();
    }
    ##PROMOSI
    private function __queryPromosi()
    {
        return DB::table('promos')
            ->select('promos.*')
            ->count();
    }
    ##SISWA
    private function __queryUserSiswa()
    {
        return DB::table('users')
            ->select('users.*')
            ->where('users.pekerjaan', '=', 'siswa')
            ->count();
    }
    ##MAHASISWA
    private function __queryUserMahaSiswa()
    {
        return DB::table('users')
            ->select('users.*')
            ->where('users.pekerjaan', '=', 'mahasiswa')
            ->count();
    }
    ##WIRASWASTA
    private function __queryUserWiraswasta()
    {
        return DB::table('users')
            ->select('users.*')
            ->where('users.pekerjaan', '=', 'wiraswasta')
            ->count();
    }
    ##WIRASWASTA
    private function __queryUserAsn()
    {
        return DB::table('users')
            ->select('users.*')
            ->where('users.pekerjaan', '=', 'asn')
            ->count();
    }
    ##LAINNYA
    private function __queryUserLainnya()
    {
        return DB::table('users')
            ->select('users.*')
            ->where('users.pekerjaan', '=', 'lainnya')
            ->count();
    }
}
