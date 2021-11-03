<?php

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

Route::get('/dashboard', [ProjectController::class, 'viewAllProject']);

Route::fallback(function() {
    return view('404NotFound', ['title' => '404 Not Found']);
});

