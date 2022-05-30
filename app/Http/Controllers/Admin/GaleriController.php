<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $galeris = Galeri::select('id', 'judul', 'gambar', 'created_at', 'kategori')->orderBy('created_at', 'desc')->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.createOrUpdate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'    => 'required',
            'gambar'   => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori' => 'required',
        ]);

        $image = $request->file('gambar');
        $jalurTujuan = public_path('/galeri/');
        $gambar  = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($jalurTujuan, $gambar);

        $galeri           = new Galeri;
        $galeri->judul    = $request->judul;
        $galeri->gambar   = $gambar;
        $galeri->kategori = $request->kategori;
        $galeri->save();

        return redirect(route('galeri.index'))->withToastSuccess('Data Berhasil Disimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.createOrUpdate', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'      => 'required',
            'gambar'     => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori'   => 'required',
        ]);

        $galeri = Galeri::find($id);
        $galeri->judul = $request->judul;
        $galeri->kategori = $request->kategori;
        if ($request->gambar != '') {
            $jalurTujuan = public_path('/galeri/');

            if ($galeri->gambar != '' && $galeri->gambar != null) {
                $gambar_old = $jalurTujuan . $galeri->gambar;
                File::delete($gambar_old);
            }

            $image = $request->file('gambar');
            $gambar_new  = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($jalurTujuan, $gambar_new);
            $galeri->gambar = $gambar_new;
        }

        $galeri->judul = $request->judul;
        $galeri->kategori = $request->kategori;
        $galeri->save();

        return redirect(route('galeri.index'))->withToastSuccess('Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $background = Galeri::where('id', $id)->first();
        File::delete('galeri/' . $background->gambar);
        Galeri::where('id', $id)->delete();
        return redirect()->back();
    }
}
