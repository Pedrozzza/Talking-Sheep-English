<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\PostsController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Route::resource('/posts', \App\Http\Controllers\PostsController::class, ['except' => ['create']]);
Route::get('/posts/create/{id}', [\App\Http\Controllers\PostsController::class, 'create']);
Route::resource('/folders', \App\Http\Controllers\FoldersController::class);


