<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Page::home');
$routes->get('/login', 'Page::login');
$routes->get('/kontak', 'Page::kontak');



$routes->get('/berita', 'Page::berita');


$routes->get('/pageadmin', 'Admin::admin');


$routes->get('/konten', 'Konten::index');
$routes->get('/konten/create', 'Konten::create');
$routes->post('/konten/store', 'Konten::store');
$routes->get('/konten/edit/(:num)', 'Konten::edit/$1');
$routes->post('/konten/update/(:num)', 'Konten::update/$1');
$routes->get('/konten/delete/(:num)', 'Konten::delete/$1');

$routes->get('/users', 'Users::index');
$routes->get('/users/create', 'Users::create');
$routes->post('/users/store', 'Users::store');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update/(:num)', 'Users::update/$1');
$routes->get('/users/delete/(:num)', 'Users::delete/$1');

$routes->get('/pengaduan', 'Pengaduan::index');
$routes->get('/pengaduan/create', 'Pengaduan::create');
$routes->post('/pengaduan/store', 'Pengaduan::store');
$routes->get('/pengaduan/edit/(:num)', 'Pengaduan::edit/$1');
$routes->post('/pengaduan/update/(:num)', 'Pengaduan::update/$1');
$routes->get('/pengaduan/delete/(:num)', 'Pengaduan::delete/$1');

