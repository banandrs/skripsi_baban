<?php

namespace App\Policies;

use App\Model\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaketPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any paket_fotos.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can view the paket_foto.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Paket_foto  $paketFoto
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can create paket_fotos.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can update the paket_foto.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Paket_foto  $paketFoto
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can delete the paket_foto.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Paket_foto  $paketFoto
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can restore the paket_foto.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Paket_foto  $paketFoto
     * @return mixed
     */
    public function restore(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can permanently delete the paket_foto.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Paket_foto  $paketFoto
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
