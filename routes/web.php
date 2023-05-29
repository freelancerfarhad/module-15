<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AssignmentControllers;



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


// task-1 form validation
    Route::post('/registration',[AssignmentControllers::class,'FormValidation']);


// task-2 Request Redirect
    Route::get('/home',function(){
        return redirect('/dashboard',302);
    });
    Route::get('/dashboard',function(){
        return "Welcome to Dashboard";
    });

// Task 3: Global Middleware LoginInfo.php
    Route::get('/checkLog', [AssignmentControllers::class, 'checkLog']);
// Task 4: Route Middleware
    Route::middleware(['AuthMiddleware'])->group(function () {
        Route::get('/profile/{password}', [AssignmentControllers::class, 'profile']);
        Route::get('/settings/{password}', [AssignmentControllers::class, 'settings']);
    });

// Task 5: Controller
Route::resource('/products',ProductController::class);


// Task 6: Single Action Controller
Route::post('/contact', ContactController::class);

//Task 7: Resource Controller
Route::resource('/products',PostController::class);


// Task 8: Blade Template Engine
Route::get('/', function () {
    return 'welcome';
});
