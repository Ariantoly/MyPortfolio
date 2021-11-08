<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Client\Request;
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

Route::get('/', [ProjectController::class, 'index']);

Route::get('/about', [UserController::class, 'index']);

Route::get('/project/{id}', [ProjectController::class, 'getProjectById']);

Route::get('/login', function() {
    return view('login');
});

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/insertProject', [DashboardController::class, 'showInsertForm']);
    Route::post('/insertProject/insert', [DashboardController::class, 'insertProject']);
    Route::delete('/delete/{id}', [DashboardController::class, 'deleteProject']);
    Route::delete('/update/{id}', [DashboardController::class, 'showUpdateForm']);
});

Route::fallback(function() {
    return view('404NotFound', ['title' => '404 Not Found']);
});

