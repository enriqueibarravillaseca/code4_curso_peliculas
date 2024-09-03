<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// $routes->get('Peliculas','PeliculaController::index');

$routes->group('dashboard',function ($routes){
    
    $routes->presenter('Pelicula',['controller' => 'Dashboard\Pelicula']);
    $routes->presenter('Categoria', ['except' => ['show'], 'controller' => 'Dashboard\Categoria' ]); 
});

$routes->get('login', 'Web\Usuario::login',['as' => 'usuario.login']);
$routes->post('login_post', 'Web\Usuario::login_post',['as' => 'usuario.login_post']);

$routes->get('register', 'Web\Usuario::register',['as' => 'usuario.register']);
$routes->get('logout', 'Web\Usuario::logout',['as' => 'usuario.logout']);
$routes->post('register_post', 'Web\Usuario::register_post',['as' => 'usuario.register_post']);

//               ruta             Pagina
//$routes->get('/codeigniter4','Home::Holamundo');