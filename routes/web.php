<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reklamarkasi', function () {
    return view('reklamarkasi_details');
})->name('reklamarkasi_details');
Route::get('/koseyazilari', array(\App\Models\KoseYazisi::class, 'index'))->name('koseyazilari.index');
