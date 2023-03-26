<?php

use App\Http\Controllers\CadastroController;
use App\Models\Cadastro;
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

Route::get('', [CadastroController::class, 'index']);
Route::get('/cadastro/create', [CadastroController::class, 'create']);
Route::post('/cadastro/store', [CadastroController::class, 'store']);
Route::get('/cadastro/show/{id}', [CadastroController::class, 'show']);
Route::post('/cadastro/update/{id}',   [CadastroController::class, 'update']);
Route::get('/cadastro/delete/{id}',  [CadastroController::class, 'delete']);
