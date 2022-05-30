<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User\Paket_foto;
use App\Model\User\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$pakets     = Paket_foto::all();
        $testimonis = Testimoni::all();
    	return view('user.blog',compact('pakets','testimonis'));
    }
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user.blog',compact('posts'));
    }
}
