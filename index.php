<!DOCTYPE html>

<?php
include 'ressource/Parsedown.php';
include 'ressource/ParsedownExtra.php';

$texte = file_get_contents('index.md');
// $partie2 = file_get_contents('texte2.md');

$extra = new ParsedownExtra();


?>

<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>plateforme du projet de recherche</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>

</head>

<body>
  <div class="container_txt">
    <?php
    echo $extra->text($texte);
    ?>
  </div>

  <div id="credits"> <h3>crédits:</h3>
   Typographies - Computer Modern, Donald E.Knuth // Les paillettes, collection de glyphes inclusifs par Victoire Bondoux & Roxanne Maillet //# Markdown Parser, <a href="https://github.com/erusev/parsedown-extra"> Parsedown Extra </a> (c) <a href="http://erusev.com">Emanuil Rusev</a> 
  </div>

</body>

</html>
