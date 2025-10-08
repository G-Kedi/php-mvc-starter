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
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$uri])) {
            [$controller, $function] = explode('@', $this->routes[$method][$uri]);
            $controller = "Gkedi\\PhpMvcStarter\\Controllers\\$controller";
            (new $controller())->$function();
        } else {
            http_response_code(404);
            echo "404 - Page not found";
        }
    }
}
