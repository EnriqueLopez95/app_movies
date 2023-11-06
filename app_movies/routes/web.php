<?php

use Illuminate\Support\Facades\Auth;
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

// RUTA DE LA PAGINA PRINCIPAL

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/index', function () {
//     return view('index');
// });

//RUTAS PARA EL ADMINISTRADOR
Route::get('/admin', function () {
    return view('admin.index');
});

// //RUTA PARA EL ADMINISTRADOR Y EL DIRECTORIO PELICULAS "ESTATICA"
// Route::get('/peliculas', function () {
//     return view('peliculas.index');
// });

//RUTA PARA EL ADMINISTRADOR-PELICULAS
//Route::get('/admin/peliculas',[App\Http\Controllers\PeliculaController::class, 'index']);

//RUTA DE LA VISTA CREATE QUE RETORNA LA FUNCION CREAR
//Route::get('/admin/peliculas/create',[App\Http\Controllers\PeliculaController::class, 'create']);

Route::resource('/admin/peliculas',\App\Http\Controllers\PeliculaController::class);