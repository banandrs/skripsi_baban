<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\promo;

class PromoController extends Controller
{
	public function index()
	{
		$hasil = promo::all();
    	return view('user.promo.promo', compact('hasil'));
	}
}
