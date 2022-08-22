<!DOCTYPE html>

<?php
include '../ressource/Parsedown.php';
include '../ressource/ParsedownExtra.php';

$texte = file_get_contents('notesWS.md');
// $partie2 = file_get_contents('texte2.md');

$extra = new ParsedownExtra();


?>

<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Notes sur Aesthetic programming, Winnie soon, Geoff Cox</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js"></script>
</head>

<body>
  <div id="boutonEtoile">Remplacer le texte par des paillettes</div>
  <div class="container_txt">
    <?php
    echo $extra->text($texte);
    ?>
  </div>
</body>
<script>
var bouton = document.getElementById("boutonEtoile");
bouton.addEventListener("click", displayStars);
var compteur = 0;
function displayStars(){
  compteur += 1;
  if (compteur == 1){
    document.body.style.fontFamily = "sblad";
  } if (compteur == 2){
    compteur = 0;
    document.body.style.fontFamily = "cmu-serif-roman";
  }
}
var p = document.getElementsByTagName("p");

    for (i = 1; i < p.length; i += 1) {
        var div = document.createElement("div");
        div.classList.add('balises');
        p[i].appendChild(div);
        div.innerHTML = i-1;
        p[i].insertBefore(div, p[i].firstChild);
    }
</script>
</html>
