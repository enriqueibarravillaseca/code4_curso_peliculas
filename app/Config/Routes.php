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

//               ruta             Pagina
//$routes->get('/codeigniter4','Home::Holamundo');