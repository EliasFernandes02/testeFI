<?php


use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// rota para curso
Route::get('/curso1', [CursoController::class, 'getList']);
Route::get('/curso1/{id}', [CursoController::class, 'getOne']);
Route::post('/curso1', [CursoController::class, 'post']);
Route::patch('/curso1/{id}', [CursoController::class, 'patch']);
Route::delete('/curso1/{id}', [CursoController::class, 'delete']);

// rota para aluno//

Route::get('/aluno1', [AlunoController::class, 'getList']);
Route::get('/aluno1/{id}', [AlunoController::class, 'getOne']);
Route::post('/aluno1', [AlunoController::class, 'post']);
Route::patch('/aluno1/{id}', [AlunoController::class, 'patch']);
Route::delete('/aluno1/{id}', [AlunoController::class, 'delete']);