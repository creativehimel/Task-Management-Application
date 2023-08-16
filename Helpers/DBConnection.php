<?php

namespace Helpers;

use PDO;
use PDOException;

class DBConnection
{
    private string $server_name = 'localhost';
    private string $user_name = 'root';
    private string $password = '';
    private string $database_name = 'task_management';

    public function connect(): PDO|string
    {
        try {
            $conn = new PDO("mysql:host=$this->server_name;dbname=$this->database_name", $this->user_name, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return "Connection Failed" . $e->getMessage();
        }
    }
}