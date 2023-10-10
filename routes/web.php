<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('news.home');
})->name('home');
Route::get('/blog', function (){
    return view('news.blog');
})->name('blog');
Route::get('/contact', function (){
    return view('news.contact');
})->name('contact');
Route::get('/single', function (){
    return view('news.single');
})->name('single');
