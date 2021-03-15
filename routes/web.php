<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactFormSubmissionController;
use Spatie\Honeypot\ProtectAgainstSpam;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [AppController::class, 'create']);
Route::post('/', [AppController::class, 'store'])->middleware(ProtectAgainstSpam::class);
Route::get('/{id}', [AppController::class, 'show']);
Route::get('/admin/all', [AppController::class, 'showAll']);
