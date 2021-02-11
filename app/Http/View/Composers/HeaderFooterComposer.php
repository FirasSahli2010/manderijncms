<?php

namespace App\Http\View\Composers;

use App\Models\site_settings;
use Illuminate\View\View;


class HeaderFooterComposer
{

    /**
     * Create a new profile composer.
     *
     * @param  App\Models\site_settings  $site_settings
     * @return void
     */
    public function __construct( $language = 'en')
    {
        // Dependencies automatically resolved by service container...
        // site_settings $site_settings
        $lang_id = 2;
        $setting_item = site_settings::where('language', $lang_id)->first();

        $this->siteName = $setting_item->site_name;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('site_name', $this->siteName);
    }
}
