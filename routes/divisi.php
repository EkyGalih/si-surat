<?php

use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['prefix' => 'Bidang-Bpkad'], function () {
        Route::get('/', [DivisiController::class, 'index'])->name('divisi-admin');
        Route::post('store', [DivisiController::class, 'store'])->name('divisi-admin.store');
        Route::get('edit/{id}', [DivisiController::class, 'edit'])->name('divisi-admin.edit');
        Route::put('update/{id}', [DivisiController::class, 'update'])->name('divisi-admin.update');
        Route::get('destroy', [DivisiController::class, 'destroy'])->name('divisi-admin.destroy');
    });
});

Route::group(['prefix' => 'agendaris', 'middleware' => ['auth', 'agendaris']], function () {
    Route::group(['prefix' => 'Bidang'], function () {
        Route::get('/', [DivisiController::class, 'index'])->name('divisi-agendaris');
        Route::post('store', [DivisiController::class, 'store'])->name('divisi-agendaris.store');
        Route::get('edit/{id}', [DivisiController::class, 'edit'])->name('divisi-agendaris.edit');
        Route::put('update/{id}', [DivisiController::class, 'update'])->name('divisi-agendaris.update');
        Route::get('destroy', [DivisiController::class, 'destroy'])->name('divisi-agendaris.destroy');
    });
});
