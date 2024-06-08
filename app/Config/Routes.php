<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Page::home');
$routes->get('/tentang', 'Page::tentang');
$routes->get('/kontak', 'Page::kontak');


$routes->get('/berita', 'Page::berita');
$routes->get('/berita/(:any)', 'Page::liatberita/$1');



$routes->get('/pageadmin', 'Admin::admin');
$routes->get('/login', 'Admin::login');
// $routes->get('/tb_berita', 'Admin::tb_berita');



$routes->get('/list_berita', 'NewsAdmin::index');
$routes->get('/list_berita/preview/(:segment)', 'NewsAdmin::preview/$1');



$routes->get('/list_berita/delete/(:segment)', 'NewsAdmin::delete/$1');



$routes->group('admin', function ($routes) {
    $routes->get('news', 'NewsAdmin::index');
    $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->get('news/create', 'NewsAdmin::create');
    $routes->post('news/create', 'NewsAdmin::create');
    $routes->get('news/edit/(:segment)', 'NewsAdmin::edit/$1');
    $routes->post('news/update/(:segment)', 'NewsAdmin::update/$1');
    $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
});
