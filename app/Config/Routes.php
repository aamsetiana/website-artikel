<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/detail-view-new', 'Home::detailNew');
$routes->get('/news/detail/(:segment)', 'Home::detail/$1');
