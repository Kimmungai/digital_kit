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
Route::get('/', 'main@index');
Route::get('/client', 'main@show');
Route::post('/client-update', 'main@update');
/*Route::get('/', function()
{
    $img = Image::make('img/test.PNG')->crop(494, 668)->save('img/croped.jpg')->gamma(1.6);
    $img->sharpen(15);
    return $img->response('jpg');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
