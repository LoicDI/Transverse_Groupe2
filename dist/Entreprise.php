<?php
function fetchEnterprisesFromAPI($api_url, $entreprise_id = null) {
    if ($entreprise_id !== null) {
        $api_url .= "?entreprise_id=" . $entreprise_id;
    }

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

    $data = json_decode($response, true);
    
    // Ajoutez cette ligne pour récupérer les axes
    $data['axes'] = fetchAxesFromAPI($api_url . "&action=get_axes");

    return $data;
}

function fetchAxesFromAPI($api_url) {
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



if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$entreprise_id = $_GET['id'];
$api_url = "http://localhost/dist/Api.php";
$data = fetchEnterprisesFromAPI($api_url, $entreprise_id);
$entreprise = $data['entreprise'];
$items = $data['item'];
$questions = $data['questionlist'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entreprise Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Détails de l'entreprise</h2>
    <h3><?php echo $entreprise['nom']; ?></h3>
    <p>ID: <?php echo $entreprise['id']; ?></p>

    <h3>Items et Questions</h3>
    <table>
        <thead>
            <tr>
                <th>Questions</th>
                <th>Items</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < max(count($items), count($questions)); $i++): ?>
                <tr>
                    <td><?php echo isset($questions[$i]) ? $questions[$i]['question'] : ''; ?></td>
                    <td><?php echo isset($items[$i]) ? $items[$i]['proposition'] : ''; ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>
