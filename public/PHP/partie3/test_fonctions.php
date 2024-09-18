<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Initiation au PHP : les fonctions</title>
	<meta charset="utf-8">
</head>
<body>
<?php
    require_once("fonctions.php");

    echo "<p>Test de la fonction produit :</p>";
    $z = produit(4, 5);
    echo 'produit(4, 5) = '.$z;

    echo "<p>Test de la fonction permut_valeur :</p>";
    // A COMPLETER


    echo "<p>Test de la fonction permut_reference :</p>";
    // A COMPLETER


?>
</body>
</html>
