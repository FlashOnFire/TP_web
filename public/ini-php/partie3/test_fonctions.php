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
    $a = 5;
    $b = 12;
    echo "Avant l'appel de permut_valeur : a = $a, b = $b <br>";
    permut_valeur($a, $b);
    echo "Après l'appel de permut_valeur : a = $a, b = $b <br>";


    echo "<p>Test de la fonction permut_reference :</p>";
    // A COMPLETER
    $a = 5;
    $b = 12;
    echo "Avant l'appel de permut_reference : a = $a, b = $b <br>";
    permut_reference($a, $b);
    echo "Après l'appel de permut_reference : a = $a, b = $b <br>";


?>
</body>
</html>
