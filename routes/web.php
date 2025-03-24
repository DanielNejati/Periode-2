<?php

use App\Http\Controllers\BusrideController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::get('/busrides', function () {
    return view('busrides.busrides-page');
})->name("busrides-page");

Route::middleware('Admin')->group(function () {

    Route::get('/admin-dashboard', function () {
        return view('admin.admin-dashboard');
    })->name("admin-dashboard");
});

//Festival controller
Route::resource('festival', FestivalController::class);

Route::resource('busride', BusrideController::class);

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
