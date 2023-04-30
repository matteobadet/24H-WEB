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
  </head>
  <body>
    <header>
    <div id="logo">
        <img id="logo" src="Resources/logo.png" />
        <a id="index" href="index.php"><h1>Bar Chez Nous</h1></a>
      </div>      <nav>
        <ul>
          <li><a href="#apropos">À Propos</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <div class="center">
            <img src="Resources/ouais.jpg" />
            <p id="testRemerciement"><b>Sa Majesté Durin te remercie pour ta commande !</b></p>
            <style>
                #testRemerciement {
                    font-size: 20px;
                    font-style: bold;
                }
            </style>
        </div>
    </section>
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
  </body>
</html>