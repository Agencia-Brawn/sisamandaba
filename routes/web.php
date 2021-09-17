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

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'usuarios/','namespace'=>'Usuarios'], function () {
    Route::get('{usuario}', 'UsuariosController@usuario')->name('usuario');

    // FORMULÁRIO LABORATORIO
    Route::get('{usuario}/formlaboratorio', 'UsuariosController@formlaboratorio')->name('form.laboratorio');
    Route::post('{usuario}/formlaboratorio', 'UsuariosController@postformlaboratorio')->name('post.form.laboratorio');
    
    // FORMULÁRIO ICIQ-KHQ
    Route::get('{usuario}/formiciq', 'UsuariosController@formiciq')->name('form.iciq');
    Route::post('{usuario}/formiciq', 'UsuariosController@postformiciq')->name('post.form.iciq');

    // FORMULÁRIO INDIVIDUAL
    Route::get('{usuario}/formindividual', 'UsuariosController@formindividual')->name('form.individual');
    Route::post('{usuario}/formindividual', 'UsuariosController@postformindividual')->name('post.form.individual');

    // FORMULÁRIO FAMILIAR
    Route::get('{usuario}/formfamiliar', 'UsuariosController@formfamiliar')->name('form.familiar');
    Route::post('{usuario}/formfamiliar', 'UsuariosController@postformfamiliar')->name('post.form.familiar');
    
    // FORMULÁRIO ANTROPOMETRIA
    Route::get('{usuario}/formantropometria', 'UsuariosController@formantropometria')->name('form.antropometria');
    Route::post('{usuario}/formantropometria', 'UsuariosController@postformantropometria')->name('post.form.antropometria');

    // FORMULÁRIO MSNI
    Route::get('{usuario}/formmsni', 'UsuariosController@formmsni')->name('form.msni');
    Route::post('{usuario}/formmsni', 'UsuariosController@postformmsni')->name('post.form.msni');

    // FORMULÁRIO PRESSÃO
    Route::get('{usuario}/formpressao', 'UsuariosController@formpressao')->name('form.pressao');
    Route::post('{usuario}/formpressao', 'UsuariosController@postformpressao')->name('post.form.pressao');


    // EDITAR FORMULÁRIOS
    Route::get('{usuario}/editarperfil', 'UsuariosController@editarperfil')->name('editar.perfil');



    Route::get('novo', 'UsuariosController@novo')->name('cadastro.usuarios');
    Route::post('novo', 'UsuariosController@create')->name('formulario.usuarios');
    
});

Route::group(['prefix' => 'unidades','namespace'=>'Unidades'], function () {
    
    Route::get('/', 'UnidadesController@unidades')->name('unidades');

    // REGISTRO DE UNIDADE
    Route::post('/', 'UnidadesController@postunidade')->name('post.registro.unidades');

    // EXIBI UNIDADE
    Route::get('/{unidade}', 'UnidadesController@unidade')->name('registro.unidade');


 

    


});

