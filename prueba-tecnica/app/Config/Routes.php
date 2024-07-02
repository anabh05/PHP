<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'User::login');
$routes->get('/user/register', 'User::index');
$routes->post('/user/register', 'User::register');
$routes->get('/', 'Home::index');
