<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

require_once '../../config/database.php';
require_once '../../models/pokemon.php';

ini_set('display_errors', 0);

$pokemon = new Pokemon($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        if (isset($_GET['name'])) {
            // GET /api/pokemon?name=bulbasaur
            $records = $pokemon->getByName($_GET['name']);
        } elseif (isset($_GET['legendary'])) {
            // GET /api/pokemon?legendary=true
            $records = $pokemon->getByLegendary($_GET['legendary']);
        } else {
            // GET /api/pokemon
            $records = $pokemon->getAll();
        }

        echo json_encode($records);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}