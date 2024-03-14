<?php
/*CARLOS ANDRES PINEDA (3210359) - TAREA 6: CREACION DE MIDDLEWARE*/
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


Route::get('/getArticles',[\App\Http\Controllers\Api\ArticlesApiController::class, 'index'])->middleware('validate.api');
Route::get('/showArticles/{id}',[\App\Http\Controllers\Api\ArticlesApiController::class, 'show'])->middleware('validate.api');
Route::delete('/deleteArticles/{id}',[\App\Http\Controllers\Api\ArticlesApiController::class,'destroy'])->middleware('validate.api');
Route::post('/createArticles',[\App\Http\Controllers\Api\ArticlesApiController::class,'store'])->middleware('validate.api');
Route::post('/editArticles',[\App\Http\Controllers\Api\ArticlesApiController::class,'edit'])->middleware('validate.api');