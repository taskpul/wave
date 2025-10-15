<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CalcomController;
use Illuminate\Support\Facades\Route;
use Wave\Facades\Wave;

Route::middleware(['auth'])->get('/access-calcom', CalcomController::class)->name('calcom.access');

// Wave routes
Wave::routes();
