<?php
namespace Gkedi\PhpMvcStater;

/**
 * Router class
 * Handles incoming requests
 */
class Router
{
    private string $request;
    private array $routes = [];

    public function __construct(string $request)
    {
        $this->request = $request;
        // For now, we just store the request
    }

    /**
     * Register a GET route
     */
    public function get(string $path, string $action): void
    {
        $this->routes['GET'][$path] = $action;
    }
}
