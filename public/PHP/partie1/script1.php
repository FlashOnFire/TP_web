<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Initiation au PHP</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    echo 'Bonjour le monde !<br>';

    $somme = 0;
    for ($i = 0; $i < 5; $i = $i + 1) {
        $somme = $somme + $i;
    }

    echo 'somme=' . $somme . '<br>';
    echo '<img src="images/globe.gif" alt="Le globe">';
?>
</body>
</html>