<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandaController;
use App\Http\Controllers\ContactanosController;
use Faker\Guesser\Name;


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
// Route::get('banda',[BandaController::class,'index'])->name('banda.index');
// Route::get('banda/create',[BandaController::class,'create'])->name('banda.create');
// Route::post('banda/store',[BandaController::class,'store'])->name('banda.store');
// Route::get('banda/{banda}',[BandaController::class,'show'])->name('banda.show');
// Route::get('banda/{banda}',[BandaController::class,'edit'])->name('banda.edit');
// //se recomienda put para actualizar
// Route::put('banda/{banda}/update',[BandaController::class,'update'])->name('banda.update');
// //se recomienda DELETE para eliminar
// Route::delete('banda/{banda}',[BandaController::class,'destroy'])->name('banda.destroy');
//acceder atodas lar rutas del controlador, esto es posible si se ha seguido las convenciones(nombre,metodos)

Route::get('/',HomeController::class)->name('home');
Route::resource('banda',BandaController::class); 
Route::view('nosotros','nosotros')->name('nosotros');//se usa para contenido estatico (no requiere BD), busca directo en views mas no en un controlador 
Route::resource('contactanos',ContactanosController::class);