<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraduationController;

Route::get('/', function () {
    return view('index');
});

// proteksi ke halaman cek kelulusan
Route::get('/check', function () {
    return redirect('/');
});

// Proses cek kelulusan
Route::post('/check', [GraduationController::class, 'check'])->name('check.status');

// Proses download PDF
Route::get('/download-skl/{id}', [GraduationController::class, 'downloadSKL'])->name('download.skl');