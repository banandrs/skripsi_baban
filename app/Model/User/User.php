<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function jadwal()
    {
        return $this->hasOne('App\Model\Admin\Jadwal_foto');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'no_hp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}

// class Pekerjaan extends Model
// {
//     public const Siswa = 'siswa';
//     public const Mahasiswa = 'mahasiswa';
//     public const Wiraswasta = 'wiraswasta';
//     public const ASM = 'ASM';

//     public const USERS = [
//         self::Siswa => 'Siswa',
//         self::Mahasiswa => 'Mahasiswa',
//         self::Wiraswasta => 'Wiraswasta',
//         self::ASM => 'ASM',
//     ];

//     public static function users()
//     {
//         return self::USERS;
//     }
// }
