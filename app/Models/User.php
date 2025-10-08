<?php
namespace Gkedi\PhpMvcStarter\Models;

use Gkedi\PhpMvcStarter\Core\Database;
use PDO;

/**
 * User Model
 * Example model for testing the database connection
 */
class User
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    
    /**
     * Get all users (example query)
     */
    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
