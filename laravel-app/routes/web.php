<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'welcom']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::post('/contact-us-post', [HomeController::class, 'contactUsPost'])->name('contact.post');
Route::get('/contact-us/{id}', [HomeController::class, 'contactUsEdit'])->name('contact.edit');
Route::post('/contact-us/{id}', [HomeController::class, 'contactUsEditPost'])->name('contact.edit.post');
Route::delete('/contact-us/{id}', [HomeController::class, 'contactUsDelete'])->name('contact.destroy');


Route::get('/tasks', [TaskController::class, 'tasks']);
Route::post('/tasks/create', [TaskController::class, 'create']);