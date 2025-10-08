<?php
namespace Gkedi\PhpMvcStarter;

/**
 * Base Controller class
 * Provides render method for views
 */
class Controller
{
    /**
     * Render a view file with optional data
     */
    protected function render(string $view, array $data = []): void
    {
        $viewFile = __DIR__ . "/../Views/$view.php";
        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            echo "View $view not found!";
        }
    }
}
