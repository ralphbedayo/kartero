<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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

// Inertia routes
Route::group(['namespace' => 'Inertia'], function (): void {
    // Landing Page
    Route::group([
        'namespace' => 'Landing',
        'controller' => 'LandingController',
    ], function (): void {
        Route::get('/', 'index')->name('landing.index');
    });

    // Guest-forced Pages
    Route::group([
        'middleware' => ['guest'],
    ], function (): void {
        // Auth
        Route::group([
            'namespace' => 'Auth',
        ], function (): void {
            // Login
            Route::group([
                'namespace' => 'Login',
                'controller' => 'LoginController',
                'prefix' => '/login',
            ], function (): void {
                Route::get('/', 'index')->name('login.index');
                Route::post('/', 'store')->name('login.store');
            });

            // Register
            Route::group([
                'namespace' => 'Registration',
                'controller' => 'RegistrationController',
                'prefix' => '/register',
            ], function (): void {
                Route::get('/', 'index')->name('register.index');
                Route::post('/', 'store')->name('register.store');
            });
        });
    });

    // Authenticated Pages
    Route::group(['middleware' => ['auth']], function (): void {
        // Home
    });
});

// Route::get('/', function () {
//    return view('welcome');
// });
