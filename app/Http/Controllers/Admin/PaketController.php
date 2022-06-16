<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User\Paket_foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $pakets = Paket_foto::select('id', 'paket', 'paket_slug', 'background', 'created_at', 'keterangan')->orderBy('created_at', 'desc')->get();
        return view('admin.paket.index', compact('pakets'));
    }

    public function create()
    {
        return view('admin.paket.createOrUpdate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'paket'         => 'required',
            'harga'         => 'required',
            'kapasitas'     => 'required',
            'durasi'        => 'required',
            'background'    => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cetak_foto'    => 'required',
            'file_foto'     => 'required',
            'keterangan'    => 'required',
        ]);

        $image = $request->file('background');
        $jalurTujuan = public_path('/background/');
        $background  = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($jalurTujuan, $background);

        $paket              = new Paket_foto;
        $paket->paket       = $request->paket;
        $paket->paket_slug  = Str::slug($request->paket);
        $paket->harga       = preg_replace('/[^0-9]/', '', $request->harga);
        $paket->kapasitas   = $request->kapasitas;
        $paket->durasi      = $request->durasi;
        $paket->background  = $background;
        $paket->cetak_foto  = $request->cetak_foto;
        $paket->file_foto   = $request->file_foto;
        $paket->keterangan  = $request->keterangan;
        $paket->save();

        return redirect(route('paket.index'))->withToastSuccess('Data Berhasil Disimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Paket_foto $paket)
    {
        return view('admin.paket.createOrUpdate', compact('paket'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'paket'         => 'required',
            'harga'         => 'required',
            'kapasitas'     => 'required',
            'durasi'        => 'required',
            'background'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cetak_foto'    => 'required',
            'file_foto'     => 'required',
            'keterangan'    => 'required',
        ]);

        $paket = Paket_foto::find($id);
        $paket->paket = $request->paket;
        $paket->harga = preg_replace('/[^0-9]/', '', $request->harga);
        $paket->kapasitas = $request->kapasitas;
        $paket->durasi = $request->durasi;
        if ($request->background != '') {
            $jalurTujuan = public_path('/background/');

            if ($paket->background != '' && $paket->background != null) {
                $background_old = $jalurTujuan . $paket->background;
                File::delete($background_old);
            }

            $image = $request->file('background');
            $background_new  = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($jalurTujuan, $background_new);
            $paket->background = $background_new;
        }

        $paket->cetak_foto = $request->cetak_foto;
        $paket->file_foto = $request->file_foto;
        $paket->keterangan = $request->keterangan;
        $paket->save();

        return redirect(route('paket.index'));
    }

    public function destroy($id)
    {
        $background = Paket_foto::where('id', $id)->first();
        File::delete('background/' . $background->background);
        Paket_foto::where('id', $id)->delete();
        return redirect()->back();
    }
}
