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

Route::get('/', 'App\Http\Controllers\WelcomeController@welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('/news', 'App\Http\Controllers\NewsController@form'); //rota para o metodo form no NewsController
    Route::post('/store', 'App\Http\Controllers\NewsController@store')->name('store'); //setando o nome da rota para store, independentemente da url,
});

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('/professores', 'App\Http\Controllers\TeachersController@form');
    Route::post('/store_professores', 'App\Http\Controllers\TeachersController@store')->name('store_professores'); 
});
