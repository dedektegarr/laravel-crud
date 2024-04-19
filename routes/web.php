<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route Mahasiswa

// butuh satu controller, didalamnya terdapat 4 method
// methode = store, create, read, update, delete

// storing data (insert data)
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

// pindah ke halaman tambah mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

// pindah halaman ke edit
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'edit']);

// read data (mengambil data)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// mengubah data
Route::patch('/mahasiswa/{id}', [MahasiswaController::class, 'update']);

// delete
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'delete']);