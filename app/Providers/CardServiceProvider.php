<?php

namespace App\Providers;

use App\Models\Card;
use App\Repositories\CardRepository;
use App\Services\CardService;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CardService::class,function($app){
            return new CardService(new CardRepository(new Card()));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
