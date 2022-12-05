<?php


require_once __DIR__ . '/../vendor/autoload.php';

use irfan\learning\php\mvc\App\Router;
use irfan\learning\php\mvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login',  HomeController::class, 'login');

Router::run();
