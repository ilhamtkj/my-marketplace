<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// autentikasi
$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->post('/login/process', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');

$routes->get('/profile', 'Profile::index', ['filter' => 'auth']);

// belum selesai
$routes->get('/detail/produk(:num)', 'Detail::productDetail/$1');
$routes->get('/cart', 'Cart::index');

// testing view
$routes->get('/showtes/(:any)', 'TesPage::showTes/$1');
