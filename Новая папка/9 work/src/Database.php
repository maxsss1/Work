<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $dbName = 'library_db';
        $user = 'root';
        $pass = '';

        try {
            $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8";

            $this->pdo = new PDO($dsn, $user, $pass);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Ошибка подключения: " . $e->getMessage();
            exit;
        }
    }

    public function getBooks(): array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT id, title, author, published_year, genre FROM books");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Ошибка выполнения запроса: " . $e->getMessage();
            return [];
        }
    }
}
