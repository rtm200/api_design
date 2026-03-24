<?php
require_once __DIR__ . '/../config/database.php';

class Pokemon {
    private $pdo;
    public function __construct($pdo) { $this->pdo = $pdo; }


    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM pokemon');
        return $stmt->fetchAll();
    }

    public function getByName($name) {
        $stmt = $this->pdo->prepare('SELECT * FROM pokemon WHERE name LIKE :name');
        $stmt->execute([':name' => "%$name%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByLegendary($legendary) {
        $stmt = $this->pdo->prepare('SELECT * FROM pokemon WHERE Legendary = :legendary');
        $value = strtolower($legendary) === 'true' ? 'TRUE' : 'FALSE';
        $stmt->execute([':legendary' => $value]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
