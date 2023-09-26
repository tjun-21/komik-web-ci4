<?php

use CodeIgniter\Router\RouteCollection;

// $routes->setDefaultNamespaces('App\Controller');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/komik/detail/(:segment)', 'Komik::detail/$1');
// $routes->get('/komik/create', 'Komik::create');

// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');
// $routes->get('/coba/(:any)', 'Coba::about/$1');

// // kontorller di dalam suatu folder atau namespace 
// $routes->get('/users', 'Admin\Users::index');
// $routes->get('/coba/', 'Home::coba');
