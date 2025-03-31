<?php

use App\Http\Controllers\BusrideController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Searchbar;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::middleware('Admin')->group(function () {

    Route::get('/admin-dashboard', function () {
        return view('admin.admin-dashboard');
    })->name("admin-dashboard");

    Route::get('admin/festival/edit/{id}', [FestivalController::class, 'edit'])->name('festival.edit');
    Route::post('admin/festival/update/{id}', [FestivalController::class, 'update'])->name('festival.update');
    Route::get('admin/festival/create', [FestivalController::class, 'create'])->name('festival.create');
    Route::get('admin/busride/edit/{id}', [BusrideController::class, 'edit'])->name('busride.edit');
    Route::get('admin/busride/create', [BusrideController::class, 'create'])->name('busride.create');
    Route::get('admin/all-festivals', [ManagementController::class, 'indexFestival'])->name('management.indexFestival');
    Route::get('admin/all-busrides', [ManagementController::class, 'indexBusrides'])->name('management.indexBusrides');
    Route::get('admin/all-users', [ManagementController::class, 'indexUsers'])->name('management.indexUsers');
    Route::resource('management', ManagementController::class);
});


//Festival controller
Route::resource('festival', FestivalController::class)->except(['edit','create', 'update', 'destroy']);

Route::resource('busride', BusrideController::class)->except(['edit','create', 'update', 'destroy']);

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
