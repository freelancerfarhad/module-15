<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Task 1: Request Validation route
 */
Route::post( '/register', [DemoController::class, 'register'] );

/**
 * Task 2: Request Redirect
 */
Route::get('/home', function () {
    return Redirect::to('/dashboard', 302);
});
 /**
 * Task 3: Global Middleware
 */

  /**
 * Task 4: Route Middleware
 */

  /**
 * Task 5: Controller
 */

 /**
 * Task 6: Single Action Controller
 */

  /**
 * Task 7: Resource Controller
 */

  /**
 * Task 8: Blade Template Engine
 */


