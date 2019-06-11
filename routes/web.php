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

Route::get('/', function () { //ruta en el navegador , segunda parte es la funcion que se ejecute
    return view('welcome');
});


Route::get('/listar',function(){
    echo "prueba 1564021";
});

Route::get('/listarusuario',function(){
    return view('usuario');
});

Route::get('/editarusuario/{id}',function($id){
    echo "prueba 1564021 POST: ".$id;
});

Route::get('/eliminarusuario/{id?}',function($id=''){
    //echo "prueba 1564021 POST: ".$id;
    return view("mascotas.lista",["nombreMascota"=>$id]);
    
});


Route::view('/listaViewMascota','mascotas.lista');

Route::get('/listarMascota','ControllerProducto@index');

Route::resource('/mascota','ControllerMascota');