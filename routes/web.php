<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('service', 'ServiceController@index');
Route::get('how-to-buy', 'HowToBuyController@index');
Route::get('contact', 'ContactController@index');
Route::post('contact/save', 'ContactController@save');
Route::get('product', 'ProductController@index');
Route::get('product/category/{id}', 'ProductController@category');
Route::get('product/detail/{id}', 'ProductController@detail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
