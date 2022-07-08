<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Model\Admin\Promo;
use App\Model\User\User;

class PromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $promos = Promo::all();
        return view('admin.promo.index', compact('promos'));
    }

    public function create()
    {
        return view('admin.promo.createOrUpdate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_promo' => 'required',
            'pekerjaan'  => 'required',
            'gambar'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
            'send_at'    => 'nullable'
        ]);
        // dd($request);
        $image = $request->file('gambar');
        $jalurTujuan = public_path('/gambar/');
        $background  = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($jalurTujuan, $background);

        $promo              = new Promo;
        $promo->nama_promo  = $request->nama_promo;
        $promo->pekerjaan   = $request->pekerjaan;
        $promo->gambar      = $background;
        $promo->keterangan  = $request->keterangan;

        $sendAt             = $request->send_at . ' ' . $request->time . ':00';
        $promo->send_at     = $sendAt;
        $promo->save();

        if ($request->redirect_url == 'email') {
            return redirect(route('promo.index'))->withToastSuccess('Data Berhasil Disimpan!');
        } else {
            return redirect('/admin/kirim-wa')->withToastSuccess('Data Berhasil Disimpan!');
        }
    }

    public function edit(Promo $promo)
    {
        return view('admin.promo.createOrUpdate', compact('promo'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_promo' => 'required',
            'pekerjaan'  => 'required',
            'gambar'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
            'send_at'    => 'nullable'
        ]);

        $promo = Promo::find($id);
        $promo->nama_promo = $request->nama_promo;
        $promo->pekerjaan = $request->pekerjaan;
        $sendAt = $request->send_at . ' ' . $request->time . ':00';
        $promo->send_at = $sendAt;
        if ($request->gambar != '') {
            $jalurTujuan = public_path('/gambar/');

            if ($promo->gambar != '' && $promo->gambar != null) {
                $background_old = $jalurTujuan . $promo->gambar;
                File::delete($background_old);
            }

            $image = $request->file('gambar');
            $background_new  = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($jalurTujuan, $background_new);
            $promo->gambar = $background_new;
        }

        $promo->keterangan = $request->keterangan;
        $promo->save();

        // return redirect(route('promo.index'))->withToastSuccess('Data Berhasil Diperbarui!');
        if ($request->redirect_url == 'email') {
            return redirect(route('promo.index'))->withToastSuccess('Data Berhasil Diperbarui!');
        } else {
            return redirect('/admin/kirim-wa')->withToastSuccess('Data Berhasil Diperbarui!');
        }
    }

    public function destroy($id)
    {
        $background = Promo::where('id', $id)->first();
        File::delete('background/' . $background->gambar);
        Promo::where('id', $id)->delete();
        return redirect()->back();
    }

    public function email($id)
    {
        $promo = Promo::find($id);
        $users = User::all();
        foreach ($users as $user) {
            \Mail::to($user->email)->send(new \App\Mail\MyTestMail($promo));
            // \Mail::to($user->email)->send(new \App\Mail\MyTestMail($promo));
        }
        toast('Pesan Sudah Dikirim Ke Email Pelanggan', 'success', 'top-right');
        return redirect(route('promo.index'));
    }
}
