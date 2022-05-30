<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Jadwal_foto extends Model
{
    public function paket(){
        return $this->belongsTo('App\Model\User\Paket_foto');
    }

    public function user(){
        return $this->belongsTo('App\Model\User\User');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    protected $casts = [
        'properties' => 'array'
    ];
}