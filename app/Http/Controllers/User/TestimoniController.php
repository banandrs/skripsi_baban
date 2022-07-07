<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Testimoni;
use App\Model\User\User;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('user.testimoni.index', compact('testimonis'));
        // return view('user.testimoni.testimoni', compact('testimonis'));
    }

    public function storeNoHp(Request $request)
    {
        $nohp = phoneFormat($request->no_hp);
        try {
            $users = User::where('no_hp', $nohp)->first();

            if (!$users) {
                return redirect()->back()
                    ->with('warning', 'Anda belum pernah melakukan booking, silahkan lakukan booking. Terimakasih!');
            }

            return redirect('testimoni/create?nohp=' . $nohp)->with('message', 'Anda pernah melakukan booking, silahkan menilai kami untuk meningkatkan kualitas pelayanan. Terimakasih!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**  */
    public function testimonial(Request $request)
    {
        $nohp = $request->get('nohp');
        $user = User::where('no_hp', $nohp)->first();
        // dd($request->get('nohp'));
        $testimonis = Testimoni::all();
        return view('user.testimoni.testimoni', compact('testimonis', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'testimoni_nama'      => 'required',
            'testimoni_pekerjaan' => 'required',
            'testimoni_survei'    => 'required'
        ]);

        Testimoni::create([
            'nama'      => $request->testimoni_nama,
            'pekerjaan' => $request->testimoni_pekerjaan,
            'survei'    => $request->testimoni_survei,
            'rating'    => $request->rating
        ]);

        return redirect('testimoni')->with('message', 'Terimakasih telah mengisi testimoni.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
