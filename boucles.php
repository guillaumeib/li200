<html>
<head>
	<meta charset="utf-8" />
	<title>Arrays</title>
</head>
<body>
	<?php

////////////à l'aide d'une boucle for()....


		//affichez les nombres de 1 à 100


		//affichez les nombres de 5 à 25, séparé par des virgules


		//affichez les multiples de 5 compris entre 0 et 100


		//affichez les nombres pairs de 20 à 60, séparés par des balises "<br />"


		//affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "<p>"
		//ayant une classe de "birth_date"


		//affichez les nombres de 50 à 25, en ordre décroissant, sauf le nombre 30.


		//construisez un array nommé "nums" contenant les nombres 10 à 20 (avec une boucle toujours)





///////////////avec boucles foreach() maintenant.....

		//voici un array numérique
		$tiroir = array("clef", "monnaie", "facture", "facture", "facture");

		//faites un print_r

		//affichez toutes les valeurs de l'array

		//affichez toutes les valeurs, séparés par des "<br />"




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


		//idem, mais dans une liste cette fois (ul et li)



		//voici un array multidimensionnel
		$paiements = array(
			array(
				"montant" => 12.55,
				"date" => "12/02/2013"
			),
			array(
				"montant" => 132.11,
				"date" => "21/11/2013"
			),
			array(
				"montant" => 125.00,
				"date" => "09/03/2013"
			),
			array(
				"montant" => 128.11,
				"date" => "11/12/2012"
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



	?>
</body>
</html>