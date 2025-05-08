<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// autentikasi
$routes->get('/login', 'Auth::index');
$routes->post('/login/process', 'Auth::loginProcess');
$routes->get('/register', 'Auth::register');
$routes->post('/register/process', 'Auth::registerProcess');
$routes->get('/logout', 'Auth::logout');

$routes->get('/profile', 'Profile::index', ['filter' => 'auth']);

// belum selesai
$routes->get('/detail/produk(:num)', 'Product::productDetail/$1');
$routes->get('/cart', 'Cart::index');

// dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/manage-product', 'Dashboard::manageProduct');

// testing view
$routes->get('/showtes/(:any)', 'TesPage::showTes/$1');
