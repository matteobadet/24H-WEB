<?php
$json = file_get_contents("https://iutdijon.u-bourgogne.fr/intra/iq/webservices/house.php?function=list");
$json = json_decode($json);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bar Chez Nous</title>
    <meta name="description" content="Le meilleur bar de la ville !">
    <link rel="stylesheet" href="styles.css">
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
	<section>
	<h1>Commande de produits</h1>
	<form method="post" action="process_commande.php">
		<label for="produit">Produit :</label>
		<select id="produit" name="produit">
			<?php
				// Connexion à la base de données
				$pdo = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees', 'nom_d_utilisateur', 'mot_de_passe');

				// Récupération des produits
				$requete = $pdo->query('SELECT * FROM produits');
				while ($produit = $requete->fetch()) {
					echo '<option value="' . $produit['id'] . '">' . $produit['nom'] . ' - ' . $produit['prix'] . '€</option>';
				}
			?>
		</select>
		<br><br>
		<label for="quantite">Quantité :</label>
		<input type="number" id="quantite" name="quantite" min="1" required>
		<br><br>
		<input type="submit" value="Ajouter à la commande">
	</form>
	<img src="Resources/nain3.png" id="nain3"/>
      <section id="contact">
        <h2>Contact</h2>
        <p>Vous avez des questions ou des commentaires sur notre bar ? Contactez-nous par téléphone ou par e-mail :</p>
        <ul>
          <li>Téléphone : 01 23 45 67 89</li>
          <li>E-mail : contact@barcheznous.com</li>
        </ul>
      </section>
    </main>
    <footer>
      <p>Bar Chez Nous - Tous droits réservés</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
