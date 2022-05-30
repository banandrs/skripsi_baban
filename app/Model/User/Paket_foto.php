<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Paket_foto extends Model
{
    public function jadwal(){
        return $this->hasOne('App\Model\Admin\Jadwal_foto');
    }

    public function getRouteKeyName(){
        return 'paket_slug';
    }
}