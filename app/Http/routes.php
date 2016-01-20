<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [ 'as' => 'site.index', function () {
    return view('site.index');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'manager', 'namespace' => 'Manager'], function() {
        Route::get('/', [ 'as' => 'manager.index', 'uses' => 'ManagerController@index']);

        Route::group(['prefix' => 'cidades'], function() {
            Route::get('/', ['as' => 'manager.cidades.index', 'uses' => 'CidadesController@index']);
            Route::get('/adicionar', ['as' => 'manager.cidades.create', 'uses' => 'CidadesController@create']);
            Route::post('/salvar', ['as' => 'manager.cidades.store', 'uses' => 'CidadesController@store']);
            Route::get('/editar/{id}', ['as' => 'manager.cidades.edit', 'uses' => 'CidadesController@edit']);
            Route::put('/atualizar/{id}', ['as' => 'manager.cidades.update', 'uses' => 'CidadesController@update']);
            Route::get('/excluir/{id}', ['as' => 'manager.cidades.destroy', 'uses' => 'CidadesController@destroy']);
        });

        Route::group(['prefix' => 'planos'], function(){
            Route::get('/', ['as' => 'manager.planos.index', 'uses' => 'PlanosController@index']);
        });
    });
});
