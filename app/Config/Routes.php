<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('Peliculas','PeliculaController::index');

//               ruta             Pagina
//$routes->get('/codeigniter4','Home::Holamundo');