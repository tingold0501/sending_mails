<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;

Route::get('/sending-mails', function () {
    return view('user.main_layout');
});
Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/my_dashboard', function () {
    return view('user.page.my_dashboard');
});

Route::get('/table', function () {
    return view('components.table', ['name' => 'table']);
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::middleware('auth')->group(function () {
    Route::get('/contract_modifier/{id}', [ContractController::class, 'edit'])->name('contract.edit');
    Route::patch('/contract_modifier', [ContractController::class, 'update'])->name('contract.update');
    // Route::delete('/contract_modifier', [ContractController::class, 'destroy'])->name('contract.destroy');
    
});

require __DIR__.'/auth.php';
