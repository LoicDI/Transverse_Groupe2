<?php

require_once 'Database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Interaction Form</title>
    </head>
    <body>
        <h1>Data Interaction Form</h1>

        <form action="your-server-side-script" method="POST">
            <fieldset>
                <legend>Enterprise</legend>
                <label for="enterpriseId">Select Enterprise:</label>
                <select name="enterpriseId" id="enterpriseId">
                    <!-- Populate this dropdown with options from the Enterprise table -->
                </select>
            </fieldset>

            <fieldset>
                <legend>Question</legend>
                <label for="questionId">Select Question:</label>
                <select name="questionId" id="questionId">
                    <!-- Populate this dropdown with options from the Question table -->
                </select>
            </fieldset>

            <fieldset>
                <legend>Reponse</legend>
                <label for="reponseId">Select Reponse:</label>
                <select name="reponseId" id="reponseId">
                    <!-- Populate this dropdown with options from the Reponse table -->
                </select>
            </fieldset>

            <fieldset>
                <legend>Result</legend>
                <label for="resultId">Select Result:</label>
                <select name="resultId" id="resultId">
                    <!-- Populate this dropdown with options from the Result table -->
                </select>
            </fieldset>

            
        </form>

        <!-- Include a script to fetch the data and populate the dropdowns -->
        <script src="your-javascript-file.js"></script>
    </body>
</html>