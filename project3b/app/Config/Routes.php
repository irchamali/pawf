<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

$routes->get('/post', 'Post::index');
$routes->get('/post/(:any)', 'Post::viewPost/$1');

$routes->group('admin', function($routes){
    $routes->get('post', 'PostAdmin::index');
    $routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
    $routes->add('post/new', 'PostAdmin::create');
    $routes->add('post/(:segment)/edit', 'PostAdmin::edit/$1');
    $routes->get('post/(:segment)/delete', 'PostAdmin::delete/$1');
});
