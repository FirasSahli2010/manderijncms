<?php

namespace App\Http\View\Composers;

use App\Models\site_settings;
use Illuminate\View\View;


class HeaderFooterComposer
{

    protected $site_name;

    /**
     * Create a new profile composer.
     *
     * @param  App\Models\site_settings  $site_settings
     * @return void
     */
    public function __construct(App\Models\Language $language)
    {
        // Dependencies automatically resolved by service container...
        // site_settings $site_settings
        $site_settings = site_settings::where('language', '1');
        $this->site_name = $site_settings->site_name;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('site_name', $this->site_name);
    }
}
