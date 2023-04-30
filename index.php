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
      </div>
      <nav>
        <ul>
          <li><a href="#apropos">À Propos</a></li>
          <li><a href="#recommendation">Recommendation</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="apropos">
        <h2>À Propos</h2>
        <p>Bienvenue au Bar Chez Nous, l"endroit idéal pour prendre un verre entre amis ou collègues. Nous vous prosons un choix divers de boissons selectionné par notre Majesté Durin.</p>
      </section>
      <section id="recommendation">
        <div class="center" id="killElves">
          <img src="Resources/kill_elves.png" alt="Kill Elves Beer"/>
          <p id="reco">Nous vous recommandons la Bière <br/><span class="partie-en-gras">Kill Elves</span></p>
        </div>
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
                $string .= "</div></div>";
                $string .= "<div class='mark'>";
                for($j=0; $j < $val->mark; $j++) $string .= "<img src='Resources/pleine.png' alt='one star' />";
                if ($val->mark!=5) {
                  for($j=0; $j < 5-$val->mark; $j++) $string .= "<img src='Resources/vide.png' alt='not a star' />";
                }
                $string .= "<button class='buy-button'>Acheter</button>";
                $string .= "</div></div>";
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
                $string .= "<div class='mark'>";
                for($j=0; $j < $val->mark; $j++) $string .= "<img src='Resources/pleine.png' alt='one star' />";
                if ($val->mark!=5) {
                  for($j=0; $j < 5-$val->mark; $j++) $string .= "<img src='Resources/vide.png' alt='not a star' />";
                }
                $string .= "</div>";            
              }

            echo $string;
          }
          ?>
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
    <script src="script.js"></script>
  </body>
</html>