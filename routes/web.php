<?php

use Illuminate\Support\Facades\Route;
use App\Models;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('manage')->group(function () {
  Route::get('/', 'App\Http\Controllers\ManageController@index'); // Matches The "/manage/" URL

  // Route::get('category', function () {
  //       // Matches The "/manage/category" URL
  // })->name('category');
  Route::get('/category/mycategoryDeleteAll', 'App\Http\Controllers\CategoriesController@deleteAll');

  Route::get('/category/add/', 'App\Http\Controllers\CategoriesController@add');

  Route::get('/category/{category}/delete/', 'App\Http\Controllers\CategoriesController@destroy')->where('category', '[0-9]+');

  Route::get('/category/{category}/permdelete/', 'App\Http\Controllers\CategoriesController@permdelete')->where('category', '[0-9]+');
  Route::get('/category/{category}/restore/', 'App\Http\Controllers\CategoriesController@restore')->where('category', '[0-9]+');
  Route::get('/category/{category}/enable', 'App\Http\Controllers\CategoriesController@enable');
  Route::get('/category/{category}/disable', 'App\Http\Controllers\CategoriesController@disable');

  Route::get('/category/update/{category}', 'App\Http\Controllers\CategoriesController@update')->where('category', '[0-9]+');

  Route::resource('category', 'App\Http\Controllers\CategoriesController');
  Route::get('/language/{language}/set_default', 'App\Http\Controllers\LanguagesController@set_default');
  Route::get('/language/{language}/enable', 'App\Http\Controllers\LanguagesController@enable');
  Route::get('/language/{language}/disable', 'App\Http\Controllers\LanguagesController@disable');
  Route::get('/language/getlist/{lang}', 'App\Http\Controllers\LanguagesController@get_language_name')->where('lang', '[0-9]+');
  Route::get('/language/getlist', 'App\Http\Controllers\LanguagesController@get_language_list');
  Route::get('/language/update/{language}', 'App\Http\Controllers\LanguagesController@update')->where('lang', '[0-9]+');

  //Route::get('/language/', 'App\Http\Controllers\LanguageController@index');
  Route::get('/language/add/', 'App\Http\Controllers\LanguagesController@add');

  Route::resource('language', 'App\Http\Controllers\LanguagesController');


  // Route::get('/site_settings/edit/', 'App\Http\Controllers\SiteSettingsController@edit');
  Route::put('/site_settings/update/{item}', 'App\Http\Controllers\SiteSettingsController@update');
  Route::get('site_settings', 'App\Http\Controllers\SiteSettingsController@index');

  // Route::get('pages', function () {
  //       // Matches The "/manage/pages" URL
  // });

  Route::get('/page/mypageDeleteAll', 'App\Http\Controllers\PagesController@deleteAll');

  Route::get('/page/update/{page}', 'App\Http\Controllers\PagesController@update')->where('page', '[0-9]+');

  Route::get('/page/add/', 'App\Http\Controllers\PagesController@add');

  Route::get('/page/{page}/delete/', 'App\Http\Controllers\PagesController@destroy')->where('page', '[0-9]+');

  Route::get('/page/{page}/permdelete/', 'App\Http\Controllers\PagesController@permdelete')->where('page', '[0-9]+');
  Route::get('/page/{page}/restore/', 'App\Http\Controllers\PagesController@restore')->where('page', '[0-9]+');
  Route::get('/page/{page}/enable', 'App\Http\Controllers\PagesController@enable');
  Route::get('/page/{page}/disable', 'App\Http\Controllers\PagesController@disable');
  // Route::POST('page', 'App\Http\Controllers\PagesController@create');
  Route::resource('page', 'App\Http\Controllers\PagesController');

  Route::get('menu', function () {
        // Matches The "/manage/men u" URL
  });

  Route::get('header', function () {
        // Matches The "/manage/header" URL
  });

  Route::get('user', function () {
        // Matches The "/manage/user" URL
  });
});

//Route::get('/manage', 'App\Http\Controllers\ManageController@index')->name('home');

Route::prefix('admin')->group(function () {
  Route::get('/', 'App\Http\Controllers\AdminController@index'); // Matches The "/manage/" URL
  Route::get('/index', function(){
    return view('admin.index');
  });

  Route::get('/post/mypostDeleteAll', 'App\Http\Controllers\PostsController@deleteAll');

  Route::get('/post/update/{post}', 'App\Http\Controllers\PostsController@update')->where('post', '[0-9]+');

  Route::get('/post/add/', 'App\Http\Controllers\PostsController@add');

  Route::get('/post/{post}/delete/', 'App\Http\Controllers\PostsController@destroy')->where('page', '[0-9]+');

  Route::get('/post/{post}/permdelete/', 'App\Http\Controllers\PostsController@permdelete')->where('page', '[0-9]+');
  Route::get('/post/{post}/restore/', 'App\Http\Controllers\PostsCoPostsControllerntroller@restore')->where('page', '[0-9]+');
  Route::get('/post/{post}/enable', 'App\Http\Controllers\PostsController@enable');
  Route::get('/post/{post}/disable', 'App\Http\Controllers\PostsController@disable');
  // Route::POST('post', 'App\Http\Controllers\PostsController@create');
  Route::resource('post', 'App\Http\Controllers\PostsController');
});

Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    //return view('welcome');
    return view('home');
});
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::get('/{locale}', function ($locale) {
  // if (! in_array($locale, ['en', 'ar'])) {
  //       abort(404);
  //   }

  App::setLocale($locale);

  Session::put('locale', $locale);
  //return redirect()->back();
  return view('welcome');
});
