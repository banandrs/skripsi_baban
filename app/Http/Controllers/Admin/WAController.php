<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Promo;
use App\Model\User\User;

class WAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $promos = Promo::all();
        return view('admin.promo.kirimwa', compact('promos'));
    }

    /** kirim pesan wa */
    public function store(Request $request)
    {
        $users = User::all();

        $params = [];
        foreach ($users as $key => $user) {
            $params[] = ['receiver' => $user->no_hp, 'message' => $request->keterangan];
        }
        $data = json_encode($params);
        // die;

        // $url = 'https://wa-restapi2.herokuapp.com/chats/send?id=6285974738314';
        $url = 'https://wa-restapi2.herokuapp.com/chats/send-bulk?id=6281258008824';

        # single
        // $data = json_encode([
        //     "receiver" => "6289524432340",
        //     "message" => "hallo selamat anda mendapatkan promo terbaru dari kami"
        // ]);

        $response = $this->curl_request('POST', $url, $data);

        // return response()->json($response);
        // return redirect()->route('kirim-wa.index')->withToastSuccess('Promo berhasil dikirim melalui wa!');
        // return redirect(route('kirim-wa.index'))->withToastSuccess('Data Berhasil Diubah!');
        // toast('Reservasi Anda berhasil dibuat. Terima kasih', 'success', 'top-right');
        return redirect()->route('kirim-wa.index');
    }


    /**
     * Curl Kirim wa
     */
    public function curl_request($method, $url, $data = "")
    {
        $curl = curl_init();
        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        //     'authorization: ' . config('message.token'),
        //     'cache-control: no-cache',
        //     'Content-Type: application/json',
        // ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            die("Connection Failure");
        }
        curl_close($curl);
        return $result;
    }
}
