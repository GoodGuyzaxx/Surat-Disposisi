<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});


Route::get('dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('dashboard/disposisi', function () {
    return view('pages.dispo.create');
})->name('dispo.create');

Route::post('dashboard/disposisi',[\App\Http\Controllers\DisposisiController::class, 'word'])->name('get.word');
Route::get('dashboard/KodeArsip', [\App\Http\Controllers\ArispController::class, 'index'])->name('arsip.index');
