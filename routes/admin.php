<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return 'Aqui vai a dashboard';
})->name('dashboard');
