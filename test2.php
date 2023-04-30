<?php
$json = file_get_contents("https://iutdijon.u-bourgogne.fr/intra/iq/webservices/house.php?function=list");
$json = json_decode($json);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Bar Chez Nous</title>
    <meta name="description" content="Le meilleur bar de la ville !">
    <link rel="stylesheet" href="styles.css">
    <style>
		.container {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
			grid-gap: 20px;
			align-items: center;
			justify-content: center;
		}

		.product {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 20px;
			border: 1px solid black;
			border-radius: 10px;
			text-align: center;
		}

		.product img {
			max-width: 100%;
			max-height: 200px;
			margin-bottom: 10px;
		}

		.product-name {
			font-weight: bold;
			margin-bottom: 10px;
		}

		.buy-button {
			background-color: #007bff;
			color: white;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
		}

		.buy-button:hover {
			background-color: #0062cc;
		}
	</style>
</head>
<body>
<header>
      <div id="logo">
        <img id="logo" src="Resources/logo.png" />
        <a id="index" href="index.php"><h1>Bar Chez Nous</h1></a>
      </div>
      <nav>
        <ul>
          <li><a href="#apropos">À Propos</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <section>
        <h1>Produits</h1>
        <div class="container">
            <?php
                // Récupération des données du fichier JSON
                $json = file_get_contents("https://iutdijon.u-bourgogne.fr/intra/iq/webservices/house.php?function=list");
                $json = json_decode($json);
                // Affichage des produits dans une grille
                foreach ($json as &$produit) {
                    echo "<div class='product'>";
                    echo "<img src='Resources/nain.png'>";
                    echo "<div class='product-name'>".$produit->name."</div>";
                    echo "<button class='buy-button'>Acheter</button>";
                    echo "</div>";
                }
            ?>
        </div>
        </section>	
    </main>
    <footer>
      <p>Bar Chez Nous - Tous droits réservés</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>