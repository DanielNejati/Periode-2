<?php

use App\Http\Controllers\BusrideController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::middleware('Admin')->group(function () {

    Route::get('/admin-dashboard', function () {
        return view('admin.admin-dashboard');
    })->name("admin-dashboard");

    Route::get('admin/all-festivals', [ManagementController::class, 'indexFestival'])->name('management.indexFestival');
    Route::get('admin/all-users', [ManagementController::class, 'indexUsers'])->name('management.indexUsers');
    Route::resource('management', ManagementController::class);
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
