<?php
// informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transversegp2";
$port = "3306";

try {
    // Connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    // Configuration des options de PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Affichage d'un message de confirmation si la connexion est réussie
    echo "Connexion à la base de données réussie";
} catch(PDOException $e) {
    // Affichage d'un message d'erreur si la connexion échoue
    echo "La connexion à la base de données a échoué: " . $e->getMessage();
}
?>