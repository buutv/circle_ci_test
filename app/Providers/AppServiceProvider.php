<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Validator::extend("emails", function($attribute, $value, $parameters) {
        //     $rules = [
        //         'email' => 'required|email',
        //     ];
        //     foreach ($value as $email) {
        //         $data = [
        //             'email' => $email
        //         ];
        //         $validator = Validator::make($data, $rules);
        //         if ($validator->fails()) {
        //             return false;
        //         }
        //     }
        //     return true;
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
