<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    public static $permissions = [
        'dashboard' => ['admin', 'user'],

    ];
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        // Gate::define('dashboard', function (User $user) {
            // if ($user->role == 'admin' || $user->role == 'user') {
            //     return true;
            // }

        // });
        foreach (self::$permissions as $permission => $roles) {
            Gate::define($permission, function (User $user)  use ($roles) {
                if (in_array($user->role, $roles)){
                    return true;
                }
            });
        }}
}
