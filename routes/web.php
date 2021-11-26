<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\SubmitsController;
use App\Http\Controllers\CentralsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeworksController;
use App\Http\Controllers\AdministrationsController;
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
Route::get('/welcome', [App\Http\Controllers\PagesController::class, 'welcome'])->middleware('auth');
Route::get('/applicants', [App\Http\Controllers\PagesController::class, 'applicants']);
Route::get('/info', [App\Http\Controllers\PagesController::class, 'info']);
Route::get('/prices', [App\Http\Controllers\PagesController::class, 'prices']);

Route::resource('/posts', \App\Http\Controllers\PostsController::class, ['except' => ['create']]);
Route::get('/posts/create/{id}', [\App\Http\Controllers\PostsController::class, 'create']);
Route::resource('/folders', \App\Http\Controllers\FoldersController::class);

Route::get('/submit', [\App\Http\Controllers\SubmitsController::class, 'index'])->middleware('auth');

Route::post('/homeworks', [\App\Http\Controllers\HomeworksController::class, 'store']);
Route::delete('/homeworks', [\App\Http\Controllers\HomeworksController::class, 'destroy']);

Route::get('/administration', [\App\Http\Controllers\AdministrationsController::class, 'index'])->name('administration')->middleware('admin', 'auth');

Route::delete('/users/{user}', [\App\Http\Controllers\AdministrationsController::class, 'destroy']);

Route::get('/administration/message/{user}', [\App\Http\Controllers\MessagesController::class, 'index'])->middleware('admin', 'auth');
Route::post('/administration/message/{user}', [\App\Http\Controllers\MessagesController::class, 'store']);
Route::delete('/central/delete/{message}', [\App\Http\Controllers\MessagesController::class, 'destroy']);

Route::get('/central', [App\Http\Controllers\CentralsController::class, 'index'])->name('central');

Route::post('/code', [App\Http\Controllers\CodesController::class, 'store']);
Route::delete('/code/{code}', [App\Http\Controllers\CodesController::class, 'destroy']);

Route::get('/maintenance', [App\Http\Controllers\PagesController::class, 'maintenance'])->middleware('auth');

Route::get('/massMessaging', [App\Http\Controllers\PagesController::class, 'massMessaging'])->middleware('admin')->name('massMessaging');

Route::post('/sendMassMessage', [\App\Http\Controllers\MessagesController::class, 'sendMassMessage'])->middleware('admin')->name('sendMassMessage');

Route::post('/apply', [\App\Http\Controllers\ApplicantController::class, 'apply'])->name('apply');
Route::delete('/applicant/{id}', [\App\Http\Controllers\ApplicantController::class, 'destroy']);