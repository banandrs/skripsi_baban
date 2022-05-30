<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('promos', 'App\Policies\PromoPolicy');
        Gate::resource('pakets', 'App\Policies\PaketPolicy');
        Gate::resource('reservasis', 'App\Policies\ReservasiPolicy');
        Gate::resource('galeris', 'App\Policies\GaleriPolicy');
        Gate::resource('pelanggans', 'App\Policies\PelangganPolicy');
        Gate::resource('users', 'App\Policies\UserPolicy');
        Gate::resource('roles', 'App\Policies\RolePolicy');
        Gate::resource('laporans', 'App\Policies\LaporanPolicy');
        Gate::resource('testimonis', 'App\Policies\TestimoniPolicy');
        Gate::resource('permissions', 'App\Policies\PermissionPolicy');
    }
}
