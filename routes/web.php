<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Boda as Boda;
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
Route::get('/', Boda::class)
    ->name('Home');

Route::get('/Raul&Antonia', Boda::class)
    ->name('Home');
    Route::get('/NuestraBoda', Boda::class)
    ->name('Home');
    


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
