<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);

// form
$routes->get('/user/profile', 'UserController::profile');
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');

// read
$routes->get('/user', 'UserController::index');


//edit
$routes->get('user/(:any)/edit', [UserController::class, 'edit']);

//update
$routes->put('user/(:any)', [UserController::class, 'update']);

//delete
$routes->delete('user/(:any)', [UserController::class, 'destroy']);

//menampilkan detail
$routes->get('user/(:any)', [UserController::class, 'show']);