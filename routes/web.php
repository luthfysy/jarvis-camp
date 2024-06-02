<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan halaman daftar tugas
Route::get('/tasks', [TaskController::class, 'index']);

// Route untuk menampilkan detail tugas
Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::get('/admin', [DashboardController::class, 'index']);


?>