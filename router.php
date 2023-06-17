<?php
/*
class Router {
    private $basePath;
    private $routes = [];

    public function __construct($basePath = '') {
        $this->basePath = $basePath;
    }

    public function get($route, $page) {
        $this->routes[$route] = $page;
    }

    public function route($uri) {
        $uri = str_replace($this->basePath, '', $uri);
        $page = $this->routes[$uri] ?? null;

        // Debugging statements
        echo "Requested URI: $uri\n";
        echo "Page to load: $page\n";

        if ($page) {
            $pagePath = "pages/" . ltrim($page, '/');
            if (file_exists($pagePath)) {
                include_once $pagePath;
            } else {
                echo "Page not found: $pagePath\n";
            }
        } else {
            echo "Route not found for URI: $uri\n";
        }
    }
}

$basePath = '/kadd/daakyeweb';
$router = new Router($basePath);

$router->get('/', 'home.php');
$router->get('/about', 'about.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->route($uri);
*/