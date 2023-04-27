<?php

// Fetch data from the Enterprise API
$apiUrl = "http://localhost/dist/Api.php";
$enterprisesData = file_get_contents($apiUrl);
$response = json_decode($enterprisesData, true);
$enterprises = $response['Enterprise'];

// Generate the HTML table rows with the fetched data
$tableRows = "";
if (count($enterprises) > 0) {
    foreach ($enterprises as $enterprise) {
        $tableRows .= "<tr><td>" . $enterprise["id"] . "</td><td><a href=\"Entreprise.php?id=" . $enterprise["id"] . "\">" . $enterprise["name"] . "</a></td></tr>";
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
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $tableRows; ?>
        </tbody>
    </table>
</body>
</html>