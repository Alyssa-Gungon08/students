<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/student', 'StudentController::Axi');
$routes->get('/student/(:any)', 'StudentController::student/$1');
$routes->post('/save', 'StudentController::save');
$routes->get('/delete/(:any)', 'StudentController::delete/$1');
$routes->get('/edit/(:any)', 'StudentController::edit/$1');