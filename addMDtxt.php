<!DOCTYPE html>

<?php
include 'ressource/Parsedown.php';
include 'ressource/ParsedownExtra.php';

$texte = file_get_contents('texte.md');
// $partie2 = file_get_contents('texte2.md');

$extra = new ParsedownExtra();


?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Recherche</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>

<body>
        <div class="container_txt">
            <?php
            echo $extra->text($texte);
            ?>
        </div>

</body>

</html>
