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
Route::post('/upload-image', 'main@save_image');
/*Route::get('/', function()
{
    $img = Image::make('img/test.PNG')->crop(494, 668)->save('img/croped.jpg')->gamma(1.6);
    $img->sharpen(15);
    return $img->response('jpg');
});*/
