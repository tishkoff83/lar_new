<?php

use App\Http\Controllers\BaseController;
use App\Providers\ViewComposers\BaseComposer;

//use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', 'BaseController@getIndex')->name('index');
Route::get('{url}', 'BaseController@getUrl');

Route::get('category/{slug}', 'CategoryController@getOne')->name('categories');
