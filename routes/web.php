<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
    return redirect()->route('home');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'handleAdmin'])->middleware('admin')->name('admin.route');

Route::get('admin/add', [PostController::class, 'create'])->middleware('admin');
Route::post('admin/home', [PostController::class, 'store'])->middleware('admin')->name('admin.home');

Route::get('admin/update/{post:id}', [PostController::class, 'edit'])->middleware('admin');
Route::post('admin/update/{post:id}', [PostController::class, 'update'])->middleware('admin')->name('admin.home');

Route::post('admin/delete/{post:id}', [PostController::class, 'destroy'])->middleware('admin')->name('admin.home');
