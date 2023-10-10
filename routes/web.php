<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'index']);
Route::get('/index',[BookController::class,'showIndex']);
Route::get('/book/{book}',[BookController::class,'show'])->name('book.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('is_admin');

Route::get('/addBook',[App\Http\Controllers\DashboardController::class, 'create'])->name('createBook');
Route::post('/addBook',[App\Http\Controllers\DashboardController::class, 'store'])->name('addBook');
Route::get('/editBook/{book}',[App\Http\Controllers\DashboardController::class, 'edit'])->name('editBook');
Route::post('/updateBook/{book}',[App\Http\Controllers\DashboardController::class, 'update'])->name('updateBook');
Route::post('/deleteBook/{book}',[App\Http\Controllers\DashboardController::class, 'delete'])->name('deleteBook');


