<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::prefix('admin')->middleware(['auth','Role:admin'])->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class,'index'])->name('dashboard');
});
