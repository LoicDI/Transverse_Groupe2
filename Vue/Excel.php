<?php
// Définition des paramètres de la connexion
$servername = "localhost:3306";; // nom du serveur de base de données
$username = "root"; // nom d'utilisateur
$password = ""; // mot de passe
$dbname = "transversegp2"; // nom de la base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Enterprise";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // afficher les données de chaque enregistrement
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
