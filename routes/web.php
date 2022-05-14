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
    // Landing Page
    Route::group([
        'namespace'  => 'Landing',
        'controller' => 'LandingController'
    ], function () {
        Route::get('/', 'index')->name('landing.index');
    });

    // Guest-forced Pages
    Route::group([
        'middleware' => ['guest']
    ], function () {
        // Auth
        Route::group([
            'namespace' => 'Auth',
        ], function () {
            // Login
            Route::group([
                'namespace'  => 'Login',
                'controller' => 'LoginController',
                'prefix'     => '/login'
            ], function () {
                Route::get('/', 'index')->name('login.index');
                Route::post('/', 'store')->name('login.store');
            });

            // Register
            Route::group([
                'namespace'  => 'Registration',
                'controller' => 'RegistrationController',
                'prefix'     => '/register'
            ], function () {
                Route::get('/', 'index')->name('register.index');
                Route::post('/', 'store')->name('register.store');
            });

        });
    });

    // Authenticated Pages
    Route::group(['middleware' => ['auth']], function () {
        // Home

    });
});

//Route::get('/', function () {
//    return view('welcome');
//});
