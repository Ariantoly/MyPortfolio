<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
    Route::get('/insert', [DashboardController::class, 'showInsertForm'])->middleware('auth');
    Route::post('/insert', [DashboardController::class, 'insertProject'])->middleware('auth');
    Route::delete('/delete/{id}', [DashboardController::class, 'deleteProject'])->middleware('auth');
    Route::get('/update/{id}', [DashboardController::class, 'showUpdateForm'])->middleware('auth');
    Route::put('/update/{id}', [DashboardController::class, 'updateProject'])->middleware('auth');
});

Route::fallback(function() {
    return view('404NotFound', ['title' => '404 Not Found']);
});

