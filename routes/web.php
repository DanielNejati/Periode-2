<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('homepagina');
})->name("homepagina");

Route::get('/festivals', function () {
    return view('festivals.festival-pagina');
})->name("festival-pagina");

Route::get('/busritten', function () {
    return view('busritten.busritten-pagina');
})->name("busritten-pagina");

//Redirect to named route...
//Route::redirect('/here', '/there');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
