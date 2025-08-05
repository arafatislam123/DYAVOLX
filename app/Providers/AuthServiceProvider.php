<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [];

    public function boot()
    {
        // Define isAdmin Gate
        Gate::define('isAdmin', function ($user) {
            return $user->is_admin;
        });

        $this->registerPolicies();
    }
}