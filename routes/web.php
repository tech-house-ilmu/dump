<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExpertController;

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

Route::get('/', [InternshipController::class, 'showCard']);

Route::get('/internships', [InternshipController::class, 'index']);

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/experts', [ExpertController::class, 'index'])->name('experts.index');