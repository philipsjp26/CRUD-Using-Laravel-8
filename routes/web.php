<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('view',[DataController::class, 'index']);
Route::get('view/id/{id}', [DataController::class, 'getById']);
Route::post('view/update/{id}', [DataController::class, 'UpdateById']);
Route::get('view/delete/{id}', [DataController::class, 'DeleteById']);
Route::post('/add', [DataController::class, 'AddData']);
Route::get('/view/add', [DataController::class, 'tambah']);