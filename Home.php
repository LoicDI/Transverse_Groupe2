

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
    </body>
</html>
