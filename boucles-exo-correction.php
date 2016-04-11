<html>
<head>
	<meta charset="utf-8" />
	<title>Arrays</title>
</head>
<body>
	<?php

////////////à l'aide d'une boucle for()....
		//affichez les nombres de 1 à 100
		for($i=0; $i<100; $i++){
			echo $i;
		}

		echo "<br>";

		//affichez les nombres de 5 à 25, séparé par des virgules
		for($i=5;$i<=25;$i++){
			echo $i . ",";
			//echo "$i,";
		}

		//affichez les multiples de 5 compris entre 0 et 100
		for($i=0; $i<100; $i+=5){
			echo $i;
		}
		//ou
		for($i=0; $i<100; $i++){
			if ($i%5 == 0){
				echo $i;
			}
		}

		//affichez les nombres pairs de 20 à 60, séparés par des balises "<br />"
		for($i=20; $i<=60; $i+=2){
			echo $i . '<br />';
		}

		//affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "<p>" ayant une classe de "birth_date"
		for($i = 1981; $i < date("Y"); $i++){
			echo '<p class="birth_date">' . $i . '</p>';
		}


		//affichez les nombres de 50 à 25, en ordre décroissant, sauf le nombre 30.
		for($i=50; $i >= 25; $i--){
			if ($i != 30){
				echo $i;
				echo "<br />";
			}
		}

		//construisez un array nommé "nums" contenant les nombres 10 à 20 (avec une boucle toujours)
		$nums = [];
		for($i=10;$i<=20;$i++){
			$nums[] = $i;
			//array_push($nums, $i);
		}
		print_r($nums);

///////////////avec boucles foreach() maintenant.....
		//voici un array numérique
		$tiroir = array("clef", "monnaie", "facture", "facture", "facture");
		//faites un print_r
		print_r($tiroir);

		//affichez toutes les valeurs de l'array
		foreach($tiroir as $element){
			echo $element;
		}
		//affichez toutes les valeurs, séparés par des "<br />"
		foreach($tiroir as $element){
			echo $element . '<br />';
		}



		//voici un array associatif
		$livre = array(
			"titre" => "le grand cahier",
			"annee" => 1995,
			"pages" => 167,
			"auteur" => "Agota Kristoff"
		);
		//affichez toutes les clefs et toutes les valeurs dans ce format, sans utiliser directement
		//les clefs dans votre code :
		//clef : valeur<br />
		//clef : valeur<br />

		foreach($livre as $key => $value){
			echo "$key : $value<br />";
		}

		//idem, mais dans une liste cette fois (ul et li)
		echo '<ul>';
		foreach($livre as $key => $value){
			echo "<li>$key : $value</li>";
		}
		echo '</ul>';


		//voici un array multidimensionnel
		$paiements = array(
			array(
				"montant" => 12.55,
				"date" => "12/02/2013"
			),
			array(
				"montant" => 132.11,
				"date" => "21/11/2013"
			),
			array(
				"montant" => 125.00,
				"date" => "09/03/2013"
			),
			array(
				"montant" => 128.11,
				"date" => "11/12/2012"
			)
		);

		//affichez tous les paiement.
		//chaque paiement doit être contenu dans un div
		//et être affiché sous cette forme :
		//<div class="payment">
		//<h3>PAIEMENT</h3>
		//montant : 999.99
		//date : 11/11/1911
		//</div>
		//à l'intérieur de votre boucle foreach, vuos pouvez directement utiliser les clefs 
		//pour faire votre affichage

		foreach($paiements as $paiement){
			echo '<div class="payment">
				<h3>PAIEMENT</h3>
				montant : '. $paiement['montant'] .'<br />
				date : '. $paiement['date'] .'
			</div>';
		}

	?>
</body>
</html>