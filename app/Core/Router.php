<?php

namespace Gkedi\PhpMvcStarter\Core;

class Router
{
    private string $request;
    private array $routes = [];

    public function __construct(string $request)
    {
        $this->request = $request;
    }

    public function get(string $path, string $action): void
    {
        $this->routes['GET'][$path] = $action;
    }

    /**
     * Run the router and execute the matching route
     */
    public function run(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route => $config) {
            // Transformer la route en regex pour matcher les paramètres {param}
            $pattern = preg_replace('#\{[a-zA-Z0-9_]+\}#', '([a-zA-Z0-9_-]+)', $route);
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // retirer l’URL complète

                $controllerName = $config['controller'];
                $method = $config['method'];

                $controllerClass = "Gkedi\\PhpMvcStarter\\Controllers\\$controllerName";
                $controller = new $controllerClass();
                call_user_func_array([$controller, $method], $matches);
                return;
            }
        }

        echo "404 - Page not found";
    }
}
