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

            Route::group(['prefix' => 'internet'], function(){
                Route::get('/', ['as' => 'manager.planos.internet.index', 'uses' => 'InternetsController@index']);
                Route::get('/adicionar', ['as' => 'manager.planos.internet.create', 'uses' => 'InternetsController@create']);
                Route::post('/salvar', ['as' => 'manager.planos.internet.store', 'uses' => 'InternetsController@store']);
                Route::get('/editar/{id}', ['as' => 'manager.planos.internet.edit', 'uses' => 'InternetsController@edit']);
                Route::put('/atualizar/{id}', ['as' => 'manager.planos.internet.update', 'uses' => 'InternetsController@update']);
                Route::get('/excluir/{id}', ['as' => 'manager.planos.internet.destroy', 'uses' => 'InternetsController@destroy']);
            });

            Route::group(['prefix' => 'tv'], function(){
                Route::get('/', ['as' => 'manager.planos.tv.index', 'uses' => 'TvsController@index']);
                Route::get('/adicionar', ['as' => 'manager.planos.tv.create', 'uses' => 'TvsController@create']);
                Route::post('/salvar', ['as' => 'manager.planos.tv.store', 'uses' => 'TvsController@store']);
                Route::get('/editar/{id}', ['as' => 'manager.planos.tv.edit', 'uses' => 'TvsController@edit']);
                Route::put('/atualizar/{id}', ['as' => 'manager.planos.tv.update', 'uses' => 'TvsController@update']);
                Route::get('/excluir/{id}', ['as' => 'manager.planos.tv.destroy', 'uses' => 'TvsController@destroy']);
            });

            Route::group(['prefix' => 'telefonia'], function(){
                Route::get('/', ['as' => 'manager.planos.telefonia.index', 'uses' => 'TelefoniasController@index']);
                Route::get('/adicionar', ['as' => 'manager.planos.telefonia.create', 'uses' => 'TelefoniasController@create']);
                Route::post('/salvar', ['as' => 'manager.planos.telefonia.store', 'uses' => 'TelefoniasController@store']);
                Route::get('/editar/{id}', ['as' => 'manager.planos.telefonia.edit', 'uses' => 'TelefoniasController@edit']);
                Route::put('/atualizar/{id}', ['as' => 'manager.planos.telefonia.update', 'uses' => 'TelefoniasController@update']);
                Route::get('/excluir/{id}', ['as' => 'manager.planos.telefonia.destroy', 'uses' => 'TelefoniasController@destroy']);
            });

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
        Route::get('/internet', ['as' => 'site.internet', 'uses' => 'SiteController@internet']);
        Route::get('/telefonia', ['as' => 'site.telefonia', 'uses' => 'SiteController@telefonia']);
        Route::get('/tv', ['as' => 'site.tv', 'uses' => 'SiteController@tv']);
        Route::get('/assine', ['as' => 'site.assine', 'uses' => 'SiteController@assine']);
    });
});
