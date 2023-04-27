<?php
// Include necessary headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Include your database connection file
require_once 'Database.php';

// Function to fetch data from each table
function fetchTableData($conn, $table_name) {
    $sql = "SELECT * FROM $table_name";
    $result = $conn->query($sql);
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
    }

    return $data;
}

// Function to fetch data from all tables
function fetchAllTablesData($conn) {
    $tables = array("entreprise", "axe", "itemlist", "item", "questionlist", "reponselist", "resultat");
    $data = array();

    foreach ($tables as $table_name) {
        $data[$table_name] = fetchTableData($conn, $table_name);
    }

    return $data;
}

// Handle the request
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        $data = fetchAllTablesData($conn);
        echo json_encode($data);
        break;
    // You can add more cases for other request methods (POST, PUT, DELETE)
    default:
        header("HTTP/1.1 405 Method Not Allowed");
        echo json_encode(array("message" => "Method not allowed."));
}

$conn->close();
