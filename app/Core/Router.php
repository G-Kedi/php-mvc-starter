<?php
namespace App\Core;

/**
 * Router class
 * Handles incoming requests
 */
class Router
{
    private string $request;

    public function __construct(string $request)
    {
        $this->request = $request;
        // For now, we just store the request
    }
}
