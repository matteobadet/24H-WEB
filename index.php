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
        <p>Bienvenue au Bar Chez Nous, l"endroit idéal pour prendre un verre entre amis ou collègues. Notre bar propose une large sélection de boissons alcoolisées et non alcoolisées, ainsi que des snacks pour accompagner vos boissons.</p>
      </section>
      <section id="menu">
        <h2>Menu</h2>
        <div class="container">
          <?php
          $i = 1;
          foreach($json as &$val){
            if($i == 1){
                $string = "<div class='bloc active'>";
                $string .= "<div class='bloc-haut'>";
                $string .= "<div class='rond'>";
                $string .= "<img src='beer.png' /></div>";
                $string .= "<p class='titre-section' style='color:red;'>". $val->name ."</p>";
                $string .= "<div class='ligne'></div>";
                $string .= "<p class='prix'>". $val->price."€ </p></div>";
                $string .= "<div class='contenu'>";
                $string .= "<img src='beer.png' alt=''>";
                $string .= "<div class='infos'>";
                $string .= "<h2>". $val->name ."</h2>";
                $string .= "<h3>Type : </h3><p>".$val->type."</p>";
                $string .= "<h3>Alcohol : </h3><p>".$val->alcohol."</p>";
                $string .= "</div></div></div>";
                $i+=1;
            } else {
                $string = "<div class='bloc'>";
                $string .= "<div class='bloc-haut'>";
                $string .= "<div class='rond'>";
                $string .= "<img src='beer.png' /></div>";
                $string .= "<p class='titre-section'>". $val->name ."</p>";
                $string .= "<div class='ligne'></div>";
                $string .= "<p class='prix'>". $val->price."€ </p></div>";
                $string .= "<div class='contenu'>";
                $string .= "<img src='beer.png' alt=''>";
                $string .= "<div class='infos'>";
                $string .= "<h2>". $val->name ."</h2>";
                $string .= "<h3>Type : </h3><p>".$val->type."</p>";
                $string .= "<h3>Alcohol : </h3><p>".$val->alcohol."</p>";
                $string .= "</div></div></div>";
            }

            echo $string;
          }
          ?>
        </div>
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
    <script src="script.js"></script>
  </body>
</html>