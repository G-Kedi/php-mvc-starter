<?php
declare(strict_types=1);

// Chemin absolu vers la racine du projet
define('ROOT_PATH', __DIR__ . '/');

// Chemin absolu vers public
define('PUBLIC_PATH', ROOT_PATH . 'public/');

// URL publique (adaptée à ton environnement MAMP)
define('PUBLIC_URL', 'http://localhost/');

// Composer autoloader
require_once ROOT_PATH . 'vendor/autoload.php';
