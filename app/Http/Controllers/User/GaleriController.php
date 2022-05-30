<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::select('id', 'judul', 'gambar', 'created_at', 'kategori')->orderBy('created_at', 'desc')->get();
        return view('user.galeri.index', compact('galeris'));
    }
}
