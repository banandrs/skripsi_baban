<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Jadwal_foto;
use App\Model\User\User;
use App\Model\User\Paket_foto;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PaketController extends Controller
{
    public function index(){
        $pakets = Paket_foto::all();
        return view('user.paket.index',compact('pakets'));
    }

    public function create($id){
        $paket = Paket_foto::findOrFail($id);
        return view('user.paket.create', compact('paket'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tanggal'   =>'required',
            'waktu'     => 'required',
            ]);
        
        if(Jadwal_foto::where(['tanggal' => $request->tanggal, 'waktu' => $request->waktu])->exists()){
            return redirect()->back()->with('message','Tanggal dan waktu sudah dibooking!');
        } else{
            $user                = new User;
            $user->name          = $request->name;
            $user->email         = $request->email;
            $user->no_hp         = $request->no_hp;
            $user->save();

            $jadwal              = new Jadwal_foto;
            $jadwal->paket_id    = $request->paket_id;
            $jadwal->user_id     = $user->id;
            $jadwal->tanggal     = $request->tanggal;
            $jadwal->slug        = Str::slug($request->tanggal);
            $jadwal->waktu       = $request->waktu;
            $jadwal->save();
        }
        toast('Reservasi Anda berhasil dibuat. Terima kasih','success','top-right');
        return redirect()->back();
    }
}