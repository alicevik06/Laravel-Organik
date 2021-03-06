<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('home.index');
});

Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


Route::get('/test/{id}', [HomeController::class, 'test'])->where('id', '[0-9]+')->name('test');

//-------------------------Admin Routes -------------------------------------------
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

