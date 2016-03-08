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

    /*
     * Rotas BACK-END
     */
    Route::group(['prefix' => 'manager'], function(){
        Route::get('/login', [ 'as' => 'manager.login', 'uses' => 'Auth\AuthController@getLogin']);
        Route::post('/login', [ 'as' => 'manager.login', 'uses' => 'Auth\AuthController@postLogin']);
        Route::get('/logout', [ 'as' => 'manager.logout', 'uses' => 'Auth\AuthController@getLogout']);
    });

    Route::group(['prefix' => 'manager', 'namespace' => 'Manager', 'middleware' => 'auth'], function() {
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
            Route::get('/adicionar', ['as' => 'manager.planos.create', 'uses' => 'PlanosController@create']);
            Route::post('/salvar', ['as' => 'manager.planos.store', 'uses' => 'PlanosController@store']);
            Route::get('/editar/{id}', ['as' => 'manager.planos.edit', 'uses' => 'PlanosController@edit']);
            Route::put('/atualizar/{id}', ['as' => 'manager.planos.update', 'uses' => 'PlanosController@update']);
            Route::get('/excluir/{id}', ['as' => 'manager.planos.destroy', 'uses' => 'PlanosController@destroy']);
        });

        Route::group(['prefix' => 'contatos'], function() {
            Route::get('/', ['as' => 'manager.contatos.index', 'uses' => 'ContatosController@index']);
        });
    });

    /*
    * Rotas FRONT-END
    */
    Route::group(['namespace' => 'Site'], function() {
        Route::get('/', [ 'as' => 'site.index', 'uses' => 'SiteController@index']);
    });
});
