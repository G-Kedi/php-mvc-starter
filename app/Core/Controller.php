<?php

namespace Gkedi\PhpMvcStarter\Core;

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
            // Extraire les variables
            extract($data);

            // Capturer le contenu de la vue
            ob_start();
            include $viewFile;
            $content = ob_get_clean();

            // Inclure le layout global
            include __DIR__ . "/../Views/_layout.php";
        } else {
            echo "View $view not found!";
        }
    }
}
