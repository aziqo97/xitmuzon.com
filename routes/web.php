<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoshController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [BoshController::class, 'index']);
Route::get('/cat/{id}', [BoshController::class, 'cat']);
Route::get('/music/{id}', [BoshController::class, 'music']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('can:manage_users');
Route::get('/admin/addcat', [AdminController::class, 'createcat'])->middleware('can:manage_users');
Route::post('/admin/addcat', [AdminController::class, 'createcatstore'])->middleware('can:manage_users');
Route::get('/admin/addmusic', [AdminController::class, 'createmusic'])->middleware('can:manage_users');
Route::post('/admin/addmusic', [AdminController::class, 'createmusicstore'])->middleware('can:manage_users');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
