<?php

namespace irfan\learning\php\mvc\App;

use function PHPUnit\Framework\returnSelf;

class Router
{
    private static $routes = [];
    public static function add(string $method, string $path, string $controller, string $function): void
    {
        // URL Mapping

        // masukan parameter ke array routes
        self::$routes[] = [
            'method'        => $method,
            'path'          => $path,
            'controller'    => $controller,
            'function'      => $function
        ];
    }

    public static function run(): void
    {
        // path default
        $path = '/';

        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) :
            if ($route['path'] == $path && $route['method'] == $method) :
                echo "Controller :" . $route['controller'] . ', Function : ' . $route['function'];
                return;
            endif;
        endforeach;

        http_response_code(404);
        echo 'CONTROLLER NOT FOUND';
    }
}
