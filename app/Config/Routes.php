<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// autentikasi
$routes->get('/login', 'Auth::index');
$routes->post('/login/process', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');

$routes->get('/profile', 'Profile::index', ['filter' => 'auth']);

// testing view
$routes->get('/showtes/(:any)', 'TesPage::showTes/$1');
