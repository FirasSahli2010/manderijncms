<?php

namespace App\Providers;

use App\Http\View\Composers\HeaderFooterComposer;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderFooterViewComposerServiseProvider extends ServiceProvider
{
    protected $siteTitle;

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
     * Bootstrap services.
     *
     * @return void
     */
    // public function boot()
    // {
    //   // Using class based composers...
    //   View::composer('Home', HeaderFooterComposer::class);
    // }

    public function boot()
    {
      $site_settings_site_name = 'Acdivet';
      //   View::composer(
      //       '*',
      //       //HeaderFooterComposer::class
      //       function ($view) {
      //         $site_settings_site_name = 'Acdivet';
      //           $view->with('site_name', $site_settings_site_name);
      //       }
      // );

      View::composer(
          '*',
          //HeaderFooterComposer::class
          View::composer('*', 'App\Http\View\Composers\HeaderFooterComposer')
    );
    }
}
