<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Jadwal_foto;
use App\Model\User\User;
use App\Model\User\Paket_foto;
use App\Model\User\Pekerjaan;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket_foto::all();
        return view('user.paket.index', compact('pakets'));
    }

    public function create($id)
    {
        $paket = Paket_foto::findOrFail($id);
        // $users = Pekerjaan::users();
        return view('user.paket.create', compact('paket'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|unique:users',
            'tanggal'   => 'required',
            'waktu'     => 'required',
        ]);

        if (Jadwal_foto::where(['tanggal' => $request->tanggal, 'waktu' => $request->waktu])->exists()) {
            return redirect()->back()->with('message', 'Tanggal dan waktu sudah dibooking!');
        } else {
            $user                = new User;
            $user->name          = $request->name;
            $user->email         = $request->email;
            $user->no_hp         = $request->no_hp;
            $user->umur          = $request->umur;
            $user->pekerjaan     = $request->pekerjaan;
            $user->save();

            $jadwal              = new Jadwal_foto;
            $jadwal->paket_id    = $request->paket_id;
            $jadwal->user_id     = $user->id;
            $jadwal->tanggal     = $request->tanggal;
            $jadwal->slug        = Str::slug($request->tanggal);
            $jadwal->waktu       = $request->waktu;
            $jadwal->save();

            // return redirect(route('user.paket.invoice', ['id' => 1])->session->forget('paket_id'));

            return redirect()
                ->route('user.paket.invoice', ['id' => 9])
                ->with('message', 'Reservasi Anda berhasil dibuat. Terima kasih!');
        }
        // toast('Reservasi Anda berhasil dibuat. Terima kasih', 'success', 'top-right');
    }

    public function show($id)
    {
        $jadwal = Jadwal_foto::findOrFail($id);
        return view('user.paket.invoice', compact('jadwal'));
    }
}
