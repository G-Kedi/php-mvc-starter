<?php
namespace Gkedi\PhpMvcStarter\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, string $action): void
    {
        $this->routes['GET'][$path] = $action;
    }

    public function run(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = trim($uri, '/'); // enlever le slash de début et fin

        if (!isset($this->routes['GET'])) {
            echo "404 - No routes defined";
            return;
        }

        foreach ($this->routes['GET'] as $path => $action) {
            // transformer {param} en regex
            $pattern = preg_replace('#\{[a-zA-Z0-9_]+\}#', '([a-zA-Z0-9_-]+)', trim($path, '/'));
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // enlever le match complet

                // action : "Controller@method"
                [$controllerName, $method] = explode('@', $action);
                $controllerClass = "Gkedi\\PhpMvcStarter\\Controllers\\$controllerName";
                $controller = new $controllerClass();

                call_user_func_array([$controller, $method], $matches);
                return;
            }
        }

        echo "404 - Page not found";
    }
}
