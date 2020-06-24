<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo','UsuariosController@addAction');
    // rota de erro
$router->get('/erro','HomeController@erro');

// rota edit e delete usuário
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');

//rota para upload
$router->get('/leis', 'HomeController@Leisindex');
$router->get('/leis/add', 'LeisController@LeisAdd');
$router->post('/leis/add','LeisController@LeisAction');

$router->get('/leis/{id}/editar', 'LeisController@LeisEdit');
$router->post('/leis/{id}/editar', 'LeisController@LeisEditAction');
$router->get('/leis/{id}/excluir', 'LeisController@del');
