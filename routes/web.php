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

//Inertia routes
Route::group(['namespace' => 'Inertia'], function () {
    //Landing Page
    Route::group([
        'namespace'  => 'Landing',
        'controller' => 'LandingController'
    ], function () {
        Route::get('/', 'index')->name('landing.index');
    });

});

//Route::get('/', function () {
//    return view('welcome');
//});
