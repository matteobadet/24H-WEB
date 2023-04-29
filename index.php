<?php
$json = file_get_contents('https://iutdijon.u-bourgogne.fr/intra/iq/webservices/house.php?function=list');
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
      <h1>Bar Chez Nous</h1>
      <nav>
        <ul>
          <li><a href="#apropos">À Propos</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="apropos">
        <h2>À Propos</h2>
        <p>Bienvenue au Bar Chez Nous, l'endroit idéal pour prendre un verre entre amis ou collègues. Notre bar propose une large sélection de boissons alcoolisées et non alcoolisées, ainsi que des snacks pour accompagner vos boissons.</p>
      </section>
      <section id="menu">
        <h2>Menu</h2>
        <ul>
          <?php
          foreach($json as &$val){
            $string = "<li>" . $val->name . "</li>";
            echo $string;
          }
          ?>
        </ul>
      </section>
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