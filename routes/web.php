<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
/* Route::get('/second', function () {
    return view('second');
}); */

// ruta que devuelve solo una vista

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('article', 'article')->name('article');


Route::get('/', [HomeController::class, 'index'])->name('home');