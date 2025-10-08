<?php
namespace Gkedi\PhpMvcStarter\Core;

use PDO;
use PDOException;

/**
 * Database Singleton class
 * Manages a single PDO instance for the entire application
 */
class Database
{
    private static ?PDO $instance = null;

    private function __construct() {} // Prevent direct instantiation
    private function __clone() {}     // Prevent cloning
    public function __wakeup() {}    // Prevent unserialization

    /**
     * Get PDO instance
     */
    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            try {
                $dsn = sprintf(
                    "mysql:host=%s;dbname=%s;charset=utf8mb4",
                    $_ENV['DB_HOST'] ?? 'localhost',
                    $_ENV['DB_NAME'] ?? 'test'
                );
                self::$instance = new PDO($dsn, $_ENV['DB_USER'] ?? 'root', $_ENV['DB_PASS'] ?? '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Database connection failed: ' . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
