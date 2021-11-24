<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});
Route::get('/userconfirmation', function () {
    return view('userConfirmation');
})->name('userconfirmation');

Route::get('/producto/motor', function () {
    return view('productos.motor.motor');
})->name('motor');

Route::get('/registro', function () {
    return view('registro.registro');
})->name('registro-motor');

Route::view('/producto/motor/landing','productos.motor.landing')->name('autos-landing');
Route::view('/producto/hogar/landing','productos.hogar.landing')->name('hogar-landing');
Route::view('/producto/personas/landing','productos.personas.landing')->name('personas-landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
