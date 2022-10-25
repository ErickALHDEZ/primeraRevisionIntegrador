<?php

use Illuminate\Support\Facades\Route;
//Creamos la referencia para poder acceder al controlador.
use App\Http\Controllers\AsignaturaController;

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

//En este documento se manipulan las rutas que nos permiten acceder directamente a las vistas.

Route::get('/', function () {
    return view('auth.login');
});

/*
Route::get('/asignatura', function () {
    return view('asignatura.index');
});
Route::get('/asignatura/create',[AsignaturaController::class,'create']);
*/


//Esta instrucción nos permite acceder a todas las rutas para no tener que referenciar manualmente una por una.
Route::resource('asignatura', AsignaturaController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [AsignaturaController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [AsignaturaController::class, 'index'])->name('home');
});
