<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!Admin::where('email', 'admin@admin.com')->exists()) {
            // Create admin user
            Admin::create([
                'firstname' => 'Admin',
                'lastname' => 'User',
                'username' => 'admin',

                'email' => 'admin@admin.com',

                'password' => Hash::make('admin'), // Change 'password' to desired password
            ]);
        }
        if (!User::where('email', 'user@user.com')->exists()) {
            // Create user
            User::create([
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('user'), // Change 'password' to desired password
                'firstname' => 'User',
                'lastname' => 'User',
                'address' => '123 Main St', // Replace with actual address
                'city' => 'City', // Replace with actual city
                'balance_adv' => 0,
                'balance_isa' => 0,
                'balance_join' => 0
            ]);
        }


    }
}
