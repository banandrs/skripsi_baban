<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Jadwal_foto;

class JadwalController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $jadwals = Jadwal_foto::with('paket:id,paket','user:id,name')->get();
        // dd($jadwals);
        return view('admin.jadwal.index',compact('jadwals'));
    }

    public function show(Jadwal_foto $jadwal)
    {
        return view('admin.jadwal.show',compact('jadwal'));
    }
}