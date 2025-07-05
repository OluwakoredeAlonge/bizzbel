<?php
namespace App\Core;

use PDO;
use PDOException;

require_once __DIR__ . '/../Config/config.php';

class Db
{
    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASSWORD;

    public function connect()
    {
        $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname";
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
        ];

        try {
            return new PDO($dsn, $this->dbuser, $this->dbpass, $option);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
