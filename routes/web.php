<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\TatuagemController;
use App\Http\Controllers\PiercingController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ImagemController;



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

Route::resource('tatuagem', TatuagemController::class);
Route::post('/tatuagem/search', [TatuagemController::class, "search"])->name('tatuagem.search');

Route::resource('profissional', ProfissionalController::class);
Route::post('/profissional/search', [ProfissionalController::class, "search"])->name('profissional.search');


