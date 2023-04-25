

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Nouvelle grille d'évaluation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Nouvelle grille d'évaluation</h1>
	<form method="post" action="traitement.php">
		<label>
			Nom de l'entreprise :
			<input type="text" name="companyName" required>
		</label>
		<br>
		<label>
			Description de l'entreprise :
			<textarea name="companyDescription" required></textarea>
		</label>
		<br>
		<h2>Compétences</h2>
		<label>
			Catégorie 1 : 
			<input type="text" name="comp_cat_1" required>
			<br>
			<ul>
				<li>
					<label>
						Question 1 :
						<input type="text" name="comp_cat_1_q1" required>
					</label>
					<br>
					<label>
						Réponse 1 :
						<input type="radio" name="comp_cat_1_q1_r" value="1" required>
					</label>
					<label>
						Réponse 2 :
						<input type="radio" name="comp_cat_1_q1_r" value="2">
					</label>
					<label>
						Réponse 3 :
						<input type="radio" name="comp_cat_1_q1_r" value="3">
					</label>
					<br>
					<label>
						Suggestions :
						<textarea name="comp_cat_1_q1_s"></textarea>
					</label>
				</li>
				<li>
					<label>
						Question 2 :
						<input type="text" name="comp_cat_1_q2" required>
					</label>
					<br>
					<label>
						Réponse 1 :
						<input type="radio" name="comp_cat_1_q2_r" value="1" required>
					</label>
					<label>
						Réponse 2 :
						<input type="radio" name="comp_cat_1_q2_r" value="2">
					</label>
					<label>
						Réponse 3 :
						<input type="radio" name="comp_cat_1_q2_r" value="3">
					</label>
					<br>
					<label>
						Suggestions :
						<textarea name="comp_cat_1_q2_s"></textarea>
					</label>
				</li>
			</ul>
		</label>
		<label>
			Catégorie 2 : 
			<input type="text" name="comp_cat_2" required>
			<br>
			<ul>
				<li>
					<label>
						Question 1 :
						<input type="text" name="comp_cat_2_q1" required>
					</label>
					<br>
					<label>
						Réponse 1 :
						<input type="radio" name="comp_cat_2_q1_r" value="1" required>
					</label>
					<label>
						Réponse 2 :
						<input type="radio" name="comp_cat_2_q1_r" value="2">
					</label>
					
                        <label>
                            Réponse 3 :
                            <input type="radio" name="comp_cat_2_q1_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="comp_cat_2_q1_s"></textarea>
                        </label>
                    </li>
                    <li>
                        <label>
                            Question 2 :
                            <input type="text" name="comp_cat_2_q2" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="comp_cat_2_q2_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="comp_cat_2_q2_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="comp_cat_2_q2_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="comp_cat_2_q2_s"></textarea>
                        </label>
                    </li>
                </ul>
            </label>
            <h2>Réactivité</h2>
            <label>
                Catégorie 1 : 
                <input type="text" name="react_cat_1" required>
                <br>
                <ul>
                    <li>
                        <label>
                            Question 1 :
                            <input type="text" name="react_cat_1_q1" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="react_cat_1_q1_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="react_cat_1_q1_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="react_cat_1_q1_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="react_cat_1_q1_s"></textarea>
                        </label>
                    </li>
                    <li>
                        <label>
                            Question 2 :
                            <input type="text" name="react_cat_1_q2" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="react_cat_1_q2_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="react_cat_1_q2_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="react_cat_1_q2_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="react_cat_1_q2_s"></textarea>
                        </label>
                    </li>
                </ul>
            </label>
            <label>
                Catégorie 2 : 
                <input type="text" name="
                react_cat_2" required>
                <br>
                <ul>
                    <li>
                        <label>
                            Question 1 :
                            <input type="text" name="react_cat_2_q1" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="react_cat_2_q1_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="react_cat_2_q1_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="react_cat_2_q1_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="react_cat_2_q1_s"></textarea>
                        </label>
                    </li>
                    <li>
                        <label>
                            Question 2 :
                            <input type="text" name="react_cat_2_q2" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="react_cat_2_q2_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="react_cat_2_q2_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="react_cat_2_q2_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="react_cat_2_q2_s"></textarea>
                        </label>
                    </li>
                </ul>
            </label>
            <h2>Numérique</h2>
            <label>
                Catégorie 1 : 
                <input type="text" name="num_cat_1" required>
                <br>
                <ul>
                    <li>
                        <label>
                            Question 1 :
                            <input type="text" name="num_cat_1_q1" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="num_cat_1_q1_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="num_cat_1_q1_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="num_cat_1_q1_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="num_cat_1_q1_s"></textarea>
                        </label>
                    </li>
                    <li>
                        <label>
                            Question 2 :
                            <input type="text" name="num_cat_1_q2" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="num_cat_1_q2_r" value="1" required>
                        
                        <label>
                            Réponse 2 :
                            <input type="radio" name="num_cat_1_q2_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="num_cat_1_q2_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="num_cat_1_q2_s"></textarea>
                        </label>
                    </li>
                </ul>
            </label>
            <label>
                Catégorie 2 : 
                <input type="text" name="num_cat_2" required>
                <br>
                <ul>
                    <li>
                        <label>
                            Question 1 :
                            <input type="text" name="num_cat_2_q1" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="num_cat_2_q1_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="num_cat_2_q1_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="num_cat_2_q1_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="num_cat_2_q1_s"></textarea>
                        </label>
                    </li>
                    <li>
                        <label>
                            Question 2 :
                            <input type="text" name="num_cat_2_q2" required>
                        </label>
                        <br>
                        <label>
                            Réponse 1 :
                            <input type="radio" name="num_cat_2_q2_r" value="1" required>
                        </label>
                        <label>
                            Réponse 2 :
                            <input type="radio" name="num_cat_2_q2_r" value="2">
                        </label>
                        <label>
                            Réponse 3 :
                            <input type="radio" name="num_cat_2_q2_r" value="3">
                        </label>
                        <br>
                        <label>
                            Suggestions :
                            <textarea name="num_cat_2_q2_s"></textarea>
                        </label>
                    </li>
                </ul>
            </label>
            <br>
            <input type="submit" value="Enregistrer la grille">
        
            <label>
                Importer un fichier Excel :
                <input type="file" id="fileInput" accept=".xlsx, .xls, .html, .htm">
            </label>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
            <script>
                document.getElementById('fileInput').addEventListener('change', handleFile);
            
                function handleFile(event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
            
                    reader.onload = function(event) {
                        const data = new Uint8Array(event.target.result);
                        const workbook = XLSX.read(data, {type: 'array'});
                        const sheet = workbook.Sheets[workbook.SheetNames[0]];
                        const htmlTable = XLSX.utils.sheet_to_html(sheet);
            
                        document.getElementById('tableOutput').innerHTML = htmlTable;
                    };
            
                    reader.readAsArrayBuffer(file);
                }
            </script>
            
        
        
    </body>
</html>

