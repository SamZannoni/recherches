<!DOCTYPE html>

<?php
include '../ressource/Parsedown.php';
include '../ressource/ParsedownExtra.php';

$texte = file_get_contents('en-attente.md');
// $partie2 = file_get_contents('texte2.md');

$extra = new ParsedownExtra();


?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><span>j</span>Texte en attente</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>

</head>

<body>
        <div class="container_txt">
            <?php
            echo $extra->text($texte);
            ?>
        </div>

</body>
<script>
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
