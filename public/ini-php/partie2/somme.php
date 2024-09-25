<html lang="fr">
<head>
    <title>PHP Partie 2</title>
    <meta charset="utf-8">
</head>
<body>
<h2>Calcul de somme</h2>
<p>
    <?php
        // isset unnecessary because empty already checks if the variable is set
        if (empty($_POST['n'])) {
            echo 'n ne peut pas être vide';
        } else {
            $n = $_POST['n'];

            if (!is_numeric($n)) {
                echo 'Vous devez saisir un nombre';
            } else if (!ctype_digit($n)) {
                echo 'Tous les caractères de la chaîne doivent être des chiffres';
            } else {
                $n = intval($n);
                $sum = ($n * ($n + 1)) / 2;
                echo "La somme des $n premiers entiers est $sum";
            }
        }
    ?>
</p>
</body>
</html>