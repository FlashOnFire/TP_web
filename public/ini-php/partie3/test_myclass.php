<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Initiation au PHP : les classes</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    require_once("myclass.php");
    // instanciation d'un objet
    $obj = new MyClass();
    echo $obj->UnPublic; // Fonctionne, normal !
    echo '<br>';
    //echo $obj->UnProtected; // Erreur fatale
    //echo $obj->UnPrivate; // Erreur fatale
    $obj->printHello(); // Affiche Public, Protected et Private
?>
</body>
</html>