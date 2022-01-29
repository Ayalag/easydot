<?php

use App\Mail\landingMailContactForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payeasyController;
use App\Http\Controllers\productos\motor\motorController;
use App\Http\Controllers\productos\persona\personaController;
use App\Http\Controllers\productos\veterinario\veterinarioController;

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


Route::middleware(['auth'])->group(function () {


Route::get('/userconfirmation', function () {
    return view('userConfirmation');
})->name('userconfirmation');

Route::view('/','home')->name('home');

Route::view('/producto/motor/landing','productos.motor.landing')->name('autos-landing');
Route::view('/producto/motor/cobertura','productos.motor.cobertura')->name('autos-cobertura');
Route::get('/producto/motor/motor',[motorController::class,'index'])->name('autos-motor');
Route::get('/producto/motor/registro/{tipo}/{aseguradora}/{plan}',[motorController::class,'isnuranceSeleted'])->name('autos-register');


Route::view('/producto/hogar/landing','productos.hogar.landing')->name('hogar-landing');
Route::view('/producto/hogar/hogar','productos.hogar.hogar')->name('hogar-hogar');
Route::view('/producto/hogar/cobertura','productos.hogar.coberturas')->name('hogar-cobertura');

Route::view('/producto/personas/cobertura','productos.personas.cobertura')->name('personas-cobertura');
Route::view('/producto/personas/landing','productos.personas.landing')->name('personas-landing');
Route::view('/producto/personas/dental','productos.personas.dental')->name('personas-dental');
Route::get('/producto/personas/er',[personaController::class,'er'])->name('personas-er');
Route::get('/producto/personas/erm',[personaController::class,'erm'])->name('personas-erm');
Route::get('/producto/mascotas/registro/{id}',[personaController::class,'isnuranceSeleted'])->name('personas-registro');

Route::view('/producto/mascotas/coberturas','productos.mascotas.coberturas')->name('mascotas-cobertura');
Route::get('/producto/mascotas/veterinario',[veterinarioController::class,'index'])->name('mascotas-veterinario');
Route::get('/producto/mascotas/registro/{aseguradora}/{plan}',[veterinarioController::class,'isnuranceSeleted'])->name('mascotas-registro');

Route::view('/centro-de-ayuda','ayuda.ayuda')->name('centro-de-ayuda');
Route::view('/conoce-easy','conocenos.conoceEasyDot')->name('conoce-easy');
Route::view('/terminos-y-condiciones','terminosCondicones.terms')->name('terminos-y-condiciones');

Route::view('/producto/correo/contacto','emails.productos.productosMail')->name('productos-mail');  //Plantilla de correo de productos

// Route::post('/landings/forms/contacto', [landingMailContactForm::class, 'send'])->name('landings-form');

// Route::view('/pago/aprobado','PagoAprobado')->name('paymentAccepted');

});

Route::get('/pagosFacil/respuesta', [payeasyController::class, 'payprocessresponce'])->name('Respuestapagalofacil');


Auth::routes();