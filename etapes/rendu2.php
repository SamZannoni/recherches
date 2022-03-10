<!DOCTYPE html>

<?php
include '../ressource/Parsedown.php';
include '../ressource/ParsedownExtra.php';

//Changer ici *$$**$$$**$
$texte = file_get_contents('rendu2.md');

$extra = new ParsedownExtra();


?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>rendu numéro 2, mars 2022</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- <script src="https://unpkg.com/pagedjs/dist/paged.polyfill.js"></script> -->
    <script src="../js/script.js"></script>

    <!-- <link href="../css/interface.css" rel="stylesheet" type="text/css"> -->
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
