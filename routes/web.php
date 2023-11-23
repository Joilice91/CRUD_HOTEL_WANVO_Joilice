<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;


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
Route::get('Inscription', [InscriptionController::class, 'form_ch']);
Route::post('Inscription/traitement', [InscriptionController::class, 'form_ch_traitement']);
Route::get('Liste', [InscriptionController::class, 'list_ch']);
Route::get('/update/{id}', [InscriptionController::class, 'update_ch']);
Route::post('update/traitement', [InscriptionController::class, 'update_ch_traitement']);
Route::post('/delete/traitement/{id}', [InscriptionController::class, 'delete_ch_traitement']);