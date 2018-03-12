<?php

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
    return view('master');
});
Route::group(['prefix' => 'api','middleware'=>['cors']],function(){
    Route::resource('recarga_movil','RecargaMovilController');
    Route::resource('pago_rpm','PagoRpmController');
    Route::resource('pago_luz','PagoLuzController');
    Route::resource('pago_agua','PagoAguaController');
    Route::resource('pago_deposito','DepositosController');
});

//Route::get('/telf/recargas', function(){
//    return view('telfmovil.recargas.index');
//});
//
//Route::get('/telf/rpm', function(){
//    return view('telfmovil.rpm.index');
//});

