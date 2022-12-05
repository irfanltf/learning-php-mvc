<?php


require_once __DIR__ . '/../vendor/autoload.php';

use irfan\learning\php\mvc\App\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'UserController', 'login');

Router::run();
