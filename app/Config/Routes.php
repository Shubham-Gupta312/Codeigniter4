<?php

use App\Controllers\StudentController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/students', 'StudentController::index');
$routes->get('/students/create', 'StudentController::create');
$routes->post('/students/add', 'StudentController::store');
$routes->get('/students/update/(:num)', 'StudentController::update/$1');
$routes->put('students/edit/(:num)', 'StudentController::edit/$1');
$routes->get('students/delete/(:num)', 'StudentController::delete/$1');