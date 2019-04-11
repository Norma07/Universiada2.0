<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
<<<<<<< HEAD
=======
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'App\Events\Event' => [
            'App\Listeners\EventListener',
=======
        Registered::class => [
            SendEmailVerificationNotification::class,
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
