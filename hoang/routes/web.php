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


Route::get('/','HomeController@index')->name('WELCOME');

// Customer
Route::prefix('customer')->group(function () {
    Route::get('homepage','CustomerController@getHomepage')->name('HOMEPAGE');
    Route::get('login','CustomerController@getLogin')->name('LOGIN');
    Route::post('executelogin','CustomerController@postLogin')->name('EXECUTELOGIN');
    Route::get('register','CustomerController@getRegister')->name('REGISTER');
    Route::post('executeregister','CustomerController@postRegister')->name('EXECUTEREGISTER');
    Route::get('logout','CustomerController@getLogout')->name('LOGOUT');
    Route::get('profile','CustomerController@getProfile')->name('PROFILE');    
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('login','AdminController@getLogin')->name('LOGINADMIN');
    Route::post('executelogin','AdminController@postLogin')->name('EXECUTELOGINADMIN');
    Route::get('logout','AdminController@getLogout')->name('LOGOUTADMIN');
    Route::get('create','AdminController@createProduct')->name('CREATEPRODUCT');
    Route::post('executecreate','ProductController@store')->name('EXECUTECREATEPRODUCT');
    Route::get('show','ProductController@index')->name('SHOWPRODUCT');
    Route::resource('manage_product', 'ProductController')->only('edit', 'update');
    Route::get('delete/{product_id}','ProductController@destroy')->name('DELETEPRODUCT');
});
