<?php

use App\Http\Controllers\CepsController;
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

//Route::view('/cep' , 'cep');

// Route::get('/', function () {
//     return 'welcome';
// });

Route::get('/', [CepsController::class, 'list']);

Route::get('/consultar', [CepsController::class, 'formConsultar']);
Route::post('/consultar', [CepsController::class, 'consultar']);

Route::get('/destruir/{id}', [CepsController::class, 'destruir']);

