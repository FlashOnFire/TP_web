<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Initiation au PHP</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    /* Vérification des données du formulaire */
    if(empty($nom) || empty($prenom) || empty($email))
    {
        print("Au moins une des cases est vide !");
    }
    else
    {
        $aroba = strpos($email,"@");
        if($aroba=='')
        {
            echo "Votre email doit comporter un <b>'@'</b>";
        }
        else
        {
            echo "$prenom $nom, votre email est <b>$email</b>";
        }
    }
?>
</body>
</html>