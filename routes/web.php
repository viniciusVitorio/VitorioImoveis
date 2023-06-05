<?php

use App\Http\Controllers\ImovelController;
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

Route::get('/imoveis', [ImovelController::class, 'index']);
Route::get('/imoveis/criar', [ImovelController::class, 'create']);
Route::post('/imovel/salvar', [ImovelController::class, 'store']);
Route::delete('/imoveis/{id}', [ImovelController::class, 'destroy'])->name('imoveis.destroy');
