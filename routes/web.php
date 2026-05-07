<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/empleados', [EmpleadosController::class, 'index']);
//Route::get('/empleados/create', [EmpleadosController::class, 'create']);


//forma vieja
//Route::get('/empleados/create', 'EmpleadosController@create'); //ire a la clase empleadosController y con el arroba llama al metodo que quiero utilizar
//SI NO QUIERO ESCRIBIR TODAS PUEDO HACER ASI
//accederia a todos los metodos de empleado controller
Route::resource('empleados', EmpleadosController::class);


