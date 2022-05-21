<?php

use App\Mail\landingMailContactForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\comprobanteCompra;
use App\Http\Controllers\payeasyController;
use App\Mail\mail\userSelectedInsuranceMail;
use App\Http\Controllers\productos\hogar\hogarController;
use App\Http\Controllers\productos\motor\motorController;
use App\Http\Controllers\productos\dental\dentalController;
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
Route::view('/profile','profile.profile')->name('profile');

Route::view('/producto/motor/landing','productos.motor.landing')->name('autos-landing');
Route::view('/producto/motor/cobertura/auto','productos.motor.cobertura-auto')->name('autos-cobertura-autos');
Route::view('/producto/motor/cobertura/moto','productos.motor.cobertura-moto')->name('autos-cobertura-motos');
Route::get('/producto/motor/motor/{type}',[motorController::class,'index'])->name('autos-motor');
Route::get('/producto/motor/registro/{tipo}/{aseguradora}/{plan}',[motorController::class,'isnuranceSeleted'])->name('autos-register');
// Route::get('/producto/motor/registro/{clase}/{tipo}/{aseguradora}/{plan}',[motorController::class,'isnuranceSeleted'])->name('autos-register');


Route::get('/producto/hogar/hogar',[hogarController::class,'index'])->name('hogar-hogar');
Route::view('/producto/hogar/landing','productos.hogar.landing')->name('hogar-landing');
Route::view('/producto/hogar/cobertura','productos.hogar.coberturas')->name('hogar-cobertura');
Route::get('/producto/hogar/registro/{id}',[hogarController::class,'isnuranceSeleted'])->name('hogar-registro');


Route::view('/producto/personas/cobertura','productos.personas.cobertura')->name('personas-cobertura');
Route::view('/producto/personas/landing','productos.personas.landing')->name('personas-landing');
Route::get('/producto/personas/er',[personaController::class,'er'])->name('personas-er');
Route::get('/producto/personas/erm',[personaController::class,'erm'])->name('personas-erm');
// Route::get('/producto/personas/registro/{id}',[personaController::class,'isnuranceSeleted'])->name('personas-registro');
Route::get('/producto/personas/registro/{clase}/{id}',[personaController::class,'isnuranceSeleted'])->name('personas-registro');

Route::get('/producto/personas/dental',[dentalController::class,'index'])->name('personas-dental');
Route::get('/producto/personas/dental/registro/{id}',[dentalController::class,'isnuranceSeleted'])->name('dental-registro');


Route::view('/producto/mascotas/coberturas','productos.mascotas.coberturas')->name('mascotas-cobertura');
Route::get('/producto/mascotas/veterinario',[veterinarioController::class,'index'])->name('mascotas-veterinario');
Route::get('/producto/mascotas/registro/{aseguradora}/{plan}',[veterinarioController::class,'isnuranceSeleted'])->name('mascotas-registro');

Route::view('/centro-de-ayuda','ayuda.ayuda')->name('centro-de-ayuda');
Route::view('/conoce-easy','conocenos.conoceEasyDot')->name('conoce-easy');
Route::view('/terminos-y-condiciones','terminosCondicones.terms')->name('terminos-y-condiciones');

});

Route::get('/pagosFacil/respuesta', [payeasyController::class, 'payprocessresponce'])->name('Respuestapagalofacil');
Route::get('/producto/motor/auto/comprobante/{order_number}', [comprobanteCompra::class, 'comprobante_motor'])->name('comprobante_motor');
Route::get('/producto/motor/moto/comprobante/{order_number}', [comprobanteCompra::class, 'comprobante_moto'])->name('comprobante_moto');
Route::get('/producto/mascota/comprobante/{order_number}', [comprobanteCompra::class, 'comprobante_mascota'])->name('comprobante_mascota');
Route::get('/producto/persona/comprobante/{order_number}', [comprobanteCompra::class, 'comprobante_persona'])->name('comprobante_persona');
Route::get('/producto/hogar/comprobante/{order_number}', [comprobanteCompra::class, 'comprobante_hogar'])->name('comprobante_hogar');
Route::get('/producto/dental/comprobante/{order_number}', [comprobanteCompra::class, 'comprobante_dental'])->name('comprobante_dental');


Auth::routes();


// Route::get('/email',function(){
//     return new userSelectedInsuranceMail();
// });
// Route::view('/mail/template/compra', 'emails.contactFromWebsite.ContactFromWebsite')->name('templatemail');