<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function getRouteKeyName(){
        return 'id';
    }
}