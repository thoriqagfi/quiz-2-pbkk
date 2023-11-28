<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

$routes->get('/user', 'UserController::index');
$routes->post('/user/save', 'UserController::save');
$routes->get('/user/login', 'UserController::login');
$routes->post('/user/auth', 'UserController::auth');
$routes->get('/user/delete/(:segment)', 'UserController::delete/$1');