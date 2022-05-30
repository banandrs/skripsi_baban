<?php

namespace App\Policies;

use App\Model\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the promo.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Promo  $promo
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can create promos.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can update the promo.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Promo  $promo
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can delete the promo.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Promo  $promo
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can restore the promo.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Promo  $promo
     * @return mixed
     */
    public function restore(Admin $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can permanently delete the promo.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Promo  $promo
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        return $this->getPermission($user,17);
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
