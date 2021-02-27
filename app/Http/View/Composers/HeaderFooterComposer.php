<?php

namespace App\Http\View\Composers;

use App\Models\site_settings;
use App\Models\Setting;
use App\Models\Languages;
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
        if( session()->has( 'locale' ) ){
           $lang_in_session = session('locale');
           $language = Languages::where('code', $lang_in_session)->first();
           $lang_id = $language->id;
        }
        else {
          $language = Languages::where('is_default', 'Y')->first();
          $lang_id = $language->id;
        }

        $setting_item = site_settings::where('language', $lang_id)->first();

        $title_text_color = Setting::where('title', 'siteTitleColor')->first();

        $this->siteName = $setting_item->site_name;
        $this->site_title = $setting_item->site_title;
        $this->site_logo = $setting_item->site_logo;
        $this->site_title_text_color = $title_text_color->value;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('site_name', $this->siteName)
             ->with('site_logo', $this->site_logo)
             ->with('site_title', $this->site_title)
             ->with('site_title_text_color', $this->site_title_text_color);
    }
}
