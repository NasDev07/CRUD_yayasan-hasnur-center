<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/siswa', 'SiswaController@index');
// Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
Route::get('/siswa/{id}/delete', [SiswaController::class, 'destroy']);
Route::get('/siswa/{id}/show', [SiswaController::class, 'show']);
Route::get('/siswa/search', [SiswaController::class, 'search']);