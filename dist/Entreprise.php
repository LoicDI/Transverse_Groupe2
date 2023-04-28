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

    return json_decode($response, true);
}

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$entreprise_id = $_GET['id'];
$api_url = "http://172.16.47.200/dist/Api.php";
$data = fetchEnterprisesFromAPI($api_url, $entreprise_id);
$entreprise = $data['entreprise'];
$items = $data['item'];
$questions = $data['questionlist'];
$itemlists = $data['itemlist']; // Ajouté pour récupérer itemlists

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

    <?php
    $axes = [
        ['id' => 1, 'nom' => 'Compétence'],
        ['id' => 2, 'nom' => 'Réactivité'],
        ['id' => 3, 'nom' => 'Numérique']
    ];

    foreach ($axes as $axe) {
        $filtered_itemlists = array_filter($itemlists, function($itemlist) use ($axe) {
            return $itemlist['idAxe'] == $axe['id'];
        });
        $filtered_questions = array_filter($questions, function($question) use ($filtered_itemlists) {
            return in_array($question['idItemlist'], array_column($filtered_itemlists['id'], 'id'));
        });
    ?>
        <h3><?php echo $axe['nom']; ?></h3>
        <table>
            <thead>
                <tr>
                    <th>Questions</th>
                    <th>Items</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($filtered_itemlists as $itemlist) {
                    $related_questions = array_filter($filtered_questions, function($question) use ($itemlist) {
                        return $question['idItemlist'] == $itemlist['id'];
                    });

                    foreach ($related_questions as $question) {
                        echo "<tr>";
                        echo "<td>" . $question['question'] . "</td>";
                        echo "<td>" . $itemlist['proposition'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    <?php } ?>
</body>
</html>
