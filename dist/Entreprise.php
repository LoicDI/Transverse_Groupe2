<?php

function fetchEnterprisesFromAPI($api_url) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response, true);
}

$api_url = "http://localhost/dist/Api.php";
$data = fetchEnterprisesFromAPI($api_url);
$enterprises = $data['Enterprise'];

$tableRows = "";
if (count($enterprises) > 0) {
    foreach ($enterprises as $enterprise) {
        $tableRows .= "<tr><td>" . $enterprise["id"] . "</td><td>" . $enterprise["name"] . "</td></tr>";
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
    <h2>Page Enterprises</h2>
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
