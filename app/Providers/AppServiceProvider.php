<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\App;

use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      if ($this->app->environment() == 'local') {
        $this->app->register(\Reliese\Coders\CodersServiceProvider::class);
      }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      /*
       *  Set up locale and locale_prefix if other language is selected
       */
       if (in_array(Request::segment(1), config('app.languages'))) {
           App::setLocale(Request::segment(1));
           config([ 'app.locale_prefix' => (Request::segment(1)?Request::segment(1):(session('locale')?session('locale'):Config::get('app.fallback_locale'))) ]);
       }
    }
}
