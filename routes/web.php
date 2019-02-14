<?php

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

Route::get('/', function () {
    return view('layouts/frontend/' . config('setting.frontend.template.folder', 'varsity') . '/home');
});
Route::get('about{ext}', function () {
    return 'About page';
});
Route::get('/hash/{key}', function ($key) {
    return \Illuminate\Support\Facades\Hash::make($key);
});

// OAuth Routes => Social Login
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gallery', 'Web\GalleryController@index');

Route::get('/{group}', 'Blog\GroupController@index');
Route::get('/{group}/{slug}', 'Blog\GroupController@slug');
Route::get('{slug}', [
    'uses' => 'SlugController@get'
])->where('slug', '([A-Za-z0-9\-\/]+)');
