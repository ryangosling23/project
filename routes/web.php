<?php

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


Route::get('/about', function () {
    return view('about');
});

Route::get('/howtofindus', function () {
    return view('howtofindus');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Auth::routes();

Route::get('/studenty', [App\Http\Controllers\styd::class, 'stud']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');