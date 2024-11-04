<?php

use App\Http\Controllers\Admin\ExerciseController as AdminExerciseController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, "home"])->name("home");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->prefix("/admin")->name("admin.")->group(function() {
    Route::get('/exercises', [AdminExerciseController::class, 'index'])->name('exercises.index');
    Route::get('/exercises/{id}', [AdminExerciseController::class, 'show'])->name('exercises.show');
    Route::get('/exercises/create', [AdminExerciseController::class, 'create'])->name('exercises.create');
    Route::post('/exercises', [AdminExerciseController::class, 'store'])->name('exercises.store');
});

