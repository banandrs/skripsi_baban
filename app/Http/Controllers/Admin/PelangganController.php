<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\User;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $pelanggans = User::all();
        return view('admin.pelanggan.index',compact('pelanggans'));
    }

    public function edit(User $pelanggan){
        return view('admin.pelanggan.createOrUpdate',compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email' => 'required',
            'no_hp' => 'required'
            ]);
        
        $pelanggan = User::find($id);
        $pelanggan->name = $request->name;
        $pelanggan->email = $request->email;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->save();

        return redirect(route('pelanggan.index'))->withToastSuccess('Data Berhasil Disimpan!');
    }
}