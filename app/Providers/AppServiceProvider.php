<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006

class AppServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
=======
     * Register any application services.
     *
     * @return void
     */
    public function register()
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
    {
        //
    }

    /**
<<<<<<< HEAD
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
=======
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
    }
}
