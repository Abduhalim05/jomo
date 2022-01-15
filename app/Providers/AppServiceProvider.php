<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SocialMedia;
use App\Models\Info;
use App\Models\Link;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.site', function($view){
            $medias=SocialMedia::first()->get();
            $view->with(compact('medias'));
        });
        view()->composer('layouts.site', function($view_info){
            $infos=Info::first()->limit(1)->where('status', 1)->get();
            $view_info->with(compact('infos'));
        });
        view()->composer('layouts.site', function($view_link){
            $links=Link::first()->get();
            $view_link->with(compact('links'));
        });
    }
}
