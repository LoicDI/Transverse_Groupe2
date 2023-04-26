<?php
require_once 'Database.php';

// Fetch data from the Enterprise table
$sql = "SELECT id, name FROM Enterprise";
$result = $conn->query($sql);

// Generate the HTML table rows with the fetched data
$tableRows = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tableRows .= "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
    }
} else {
    $tableRows = "<tr><td colspan=\"2\">No enterprises found</td></tr>";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Enterprises Table</title>
</head>
<body>
    <h2>Enterprises</h2>
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
