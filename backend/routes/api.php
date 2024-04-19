<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Teszt
Route::get('/tesztIndex', [TesztController::class, 'index']);
Route::post('/teszt/create', [TesztController::class, 'store']);
Route::get('/teszt/{id}', [TesztController::class, 'show']);
Route::get('/tesztList', [TesztController::class, 'tesztLista']);
//Kategróriák
Route::get('/kategoria', [KategoriaController::class, 'index']);
Route::post('/kategoria/create', [KategoriaController::class, 'store']);
Route::get('/kategoria/{id}', [KategoriaController::class, 'show']);
Route::get('/kategoriaList', [KategoriaController::class, 'kategoriaLista']);
