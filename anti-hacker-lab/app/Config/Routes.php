<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LabController::index');
$routes->post('submit', 'LabController::submit');