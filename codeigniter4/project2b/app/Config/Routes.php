<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/portfolio', 'Portfolio::index');
$routes->get('/about', 'About::index');
