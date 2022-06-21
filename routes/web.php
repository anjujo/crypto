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


 Route::get('/', function(){
    return view('auth.login');
 });
Route::group(['middleware'=>'auth'],function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('indexx','App\Http\Controllers\FrontController@index');
Route::get('bank','App\Http\Controllers\FrontController@bank');
Route::get('cardlist','App\Http\Controllers\FrontController@cardList');
Route::get('basketcart','App\Http\Controllers\FrontController@basketCart');
Auth::routes();

});
