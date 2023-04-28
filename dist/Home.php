<?php

// Fetch data from the Enterprise API
$apiUrl = "http://172.16.47.200/dist/Api.php";
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        h2 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        a {
            color: #1e90ff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Choix de l'entreprise</h2>
    <table>
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
