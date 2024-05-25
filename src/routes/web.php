<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
// Route::post('contacts/confirm', [ContactController::class, 'confirm']);
// Route::get('/', [ContactController::class, 'confirm']);
// Route::get('confirm/thanks', [ContactController::class, 'thanks']);
// Route::post('/contacts', [ContactController::class, 'store']);