<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\User\UserOrderController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});
Route::get('services', function(){
    return view('services');
});
Route::get('contact', function(){
    return view('contact');
});

Route::middleware(['auth:web'])->group(function(){
    Route::get('ordertreatment', function(){
        return view('ordertreatment');
    });
});

Route::get('home',function(){
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified', 'isadmin'])->group(function (){
    Route::get('/dashboard', function () {return view('dashboard');});

    Route::resources([
        'treatment' => TreatmentController::class,
        'order' => OrderController::class,
    ]);
});

Route::middleware(['auth:sanctum'])->prefix('user')->group(function (){
    Route::resources([
        'order' => UserOrderController::class,
    ]);
});