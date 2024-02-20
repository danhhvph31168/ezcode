<?php

use Bramus\Router\Router;
use Dell\Codephp\Controllers\Admin\AuthenticateController;
use Dell\Codephp\Controllers\Admin\CategoryController;
use Dell\Codephp\Controllers\Admin\CommentsController;
use Dell\Codephp\Controllers\Admin\DashboardController;
use Dell\Codephp\Controllers\Admin\CoursesController;
use Dell\Codephp\Controllers\Admin\RatingsController;
use Dell\Codephp\Controllers\Admin\UsersController;
use Dell\Codephp\Controllers\Client\HomeController;

$routes = new Router();
$routes->get('/',                                       HomeController::class . '@index');

$routes->match('GET|POST', '/auth/login',               AuthenticateController::class . '@login');

$routes->mount('/admin', function () use ($routes) {
    $routes->get('/',                                   DashboardController::class . '@index');
    $routes->get('/logout',                             AuthenticateController::class . '@logout');

    $routes->mount('/courses', function () use ($routes) {
        $routes->get('/',                               CoursesController::class . '@index');
        $routes->get('/{id}/show',                      CoursesController::class . '@show');
        $routes->get('/{id}/delete',                    CoursesController::class . '@delete');
        $routes->match('GET|POST', '/create',           CoursesController::class . '@create');
        $routes->match('GET|POST', '/{id}/update',      CoursesController::class . '@update');
    });

    $routes->mount('/users', function () use ($routes) {
        $routes->get('/',                               UsersController::class . '@index');
        $routes->get('/{id}/show',                      UsersController::class . '@show');
        $routes->get('/{id}/delete',                    UsersController::class . '@delete');
        $routes->match('GET|POST', '/create',           UsersController::class . '@create');
        $routes->match('GET|POST', '/{id}/update',      UsersController::class . '@update');
    });

    $routes->mount('/categories', function () use ($routes) {
        $routes->get('/',                               CategoryController::class . '@index');
        $routes->get('/{id}/show',                      CategoryController::class . '@show');
        $routes->get('/{id}/delete',                    CategoryController::class . '@delete');
        $routes->match('GET|POST', '/create',           CategoryController::class . '@create');
        $routes->match('GET|POST', '/{id}/update',      CategoryController::class . '@update');
    });

    $routes->mount('/comments', function () use ($routes) {
        $routes->get('/',                               CommentsController::class . '@index');
        $routes->get('/{id}/delete',                    CommentsController::class . '@delete');
    });

    $routes->mount('/ratings', function () use ($routes) {
        $routes->get('/',                               RatingsController::class . '@index');
        $routes->get('/{id}/delete',                    RatingsController::class . '@delete');
    });
});

$routes->before('GET|POST', '/admin/*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});
$routes->before('GET|POST', '/admin/.*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});

$routes->run();
