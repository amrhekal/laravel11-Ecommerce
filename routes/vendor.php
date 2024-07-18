<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;


Route::prefix('vendor')->middleware(['auth','Role:vendor'])->name('vendor.')->group(function () {
    Route::get('dashboard', [VendorController::class,'index'])->name('dashboard');

});
