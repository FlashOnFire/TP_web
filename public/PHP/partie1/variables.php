<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Initiation au PHP</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    /* Variables scalaires */
    $Variable1 = 12; // type entier
    $Variable2 = 8.6; // type réel
    $Variable3 = "Bonjour tout le monde"; // type chaine
    echo "var1 = $Variable1, var2 = $Variable2, var3 = $Variable3";
    echo "<br>";

    /* Tableaux */
    $Tab[0] = 12; // type entier
    $Tab[1] = "CCM"; // type chaine
    print("Tableau[0] = $Tab[0] et Tableau[1] = $Tab[1]");
    print("<br>");
    /* Tableaux associatifs */
    $Toto["Age"] = 12;
    $Toto["Adresse"] = "22 rue des bois fleuris";
    echo "Age : " . $Toto["Age"] . " adresse : " . $Toto["Adresse"];
    print("<br>");
?>
</body>
</html>