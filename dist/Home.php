<?php

// Fetch data from the Enterprise API
$apiUrl = "http://localhost/dist/Api.php";
$enterprisesData = file_get_contents($apiUrl);
$response = json_decode($enterprisesData, true);
$entreprises = $response['entreprise'];

// Generate the HTML table rows with the fetched data
$tableRows = "";
if (count($entreprises) > 0) {
    foreach ($entreprises as $entreprises) {
        $tableRows .= "<tr><td>" . $entreprises["id"] . "</td><td><a href=\"Entreprise.php?id=" . $entreprises["id"] . "\">" . $entreprises["nom"] . "</a></td></tr>";
    }
} else {
    $tableRows = "<tr><td colspan=\"2\">No enterprises found</td></tr>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Enterprises Table</title>
</head>
<body>
    <h2>Choix de l'enterprises</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $tableRows; ?>
        </tbody>
    </table>
</body>
</html>