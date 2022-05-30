<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public function post()
    {
    	return $this->belongsTo('App\Model\user\post','like'); 
    }
}
