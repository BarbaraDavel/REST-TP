<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmprendimientoController;
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

Route::get('/', function () {
   return view('auth.login');
});
//Route::get('/usuario', [UsuarioController::class, 'index']);
//Route::get('/usuario/create', [UsuarioController::class, 'create']);

Route::resource('usuario', UsuarioController::class);
Route::resource('emprendimiento', EmprendimientoController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



