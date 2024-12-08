<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard/student', function (){
//    return view('dashboard.student');
//    })->name('dashboard.student');
//
//Route::get('/dashboard/teacher', function (){
//    return view('dashboard.teacher');
//})->name('dashboard.teacher');
//
//Route::get('/dashboard/employee', function (){
//    return view('dashboard.employee');
//})->name('dashboard.employee');
//
Route::get('dashboard/test', function () {
    return view('dashboard.student');
})->middleware(['auth']);

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/student', [DashboardController::class, 'student'])->name('dashboard.student');
    Route::get('/teacher', [DashboardController::class, 'teacher'])->name('dashboard.teacher');
    Route::get('/employee', [DashboardController::class, 'employee'])->name('dashboard.employee');
    Route::get('/default', [DashboardController::class, 'default'])->name('dashboard.default');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
