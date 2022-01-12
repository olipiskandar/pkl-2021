<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('databuku', function(){
    return 'Data Buku';
});

Route::resource('user', 'ApiUserController');
Route::get('pengarang', 'ApiPengarangaController@index');
Route::post('pengarang', 'ApiPengarangaController@store');
Route::post('pengarang/{id}', 'ApiPengarangaController@update');
Route::post('pengarang/hapus/{id}', 'ApiPengarangaController@destroy');