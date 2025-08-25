<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::registerPost');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::loginPost');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Plant::index');

$routes->get('/plant', 'Plant::index');

$routes->get('/plant/create', 'Plant::create');
$routes->post('/plant/store', 'Plant::store');
$routes->get('/plant/edit/(:num)', 'Plant::edit/$1');
$routes->post('/plant/update/(:num)', 'Plant::update/$1');
$routes->get('/plant/delete/(:num)', 'Plant::delete/$1');

$routes->get('about_us', 'Pages::aboutUs');
$routes->get('report', 'Pages::report'); // Also add this for the Report page if not added
$routes->get('create', 'Plant::create');

$routes->get('index', 'Plant::index');
$routes->get('/plant/report', 'PlantController::report');

$routes->get('plant/category', 'PlantController::category');
$routes->get('plant/category/(:any)', 'PlantController::category/$1');










