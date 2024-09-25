<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Initiation au PHP</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    echo 'exemple foreach 1 : la valeur seulement<br>';
    $arr = array("un", "deux", "trois");
    foreach ($arr as $value) {
        echo 'Valeur : ' . $value . '<br>';
    }
    echo '<br>';

    echo 'exemple foreach 2 : la clé et la valeur<br>';
    $arr = array("un", "deux", "trois");
    foreach ($arr as $key => $value) {
        echo 'Clé : ' . $key . ' ; Valeur : ' . $value . '<br>';
    }

    echo '<br>';

    echo 'exemple foreach 3 : la clé et la valeur (autre exemple)<br>';
    $arr = array(
        "un" => 1,
        2 => "deux",
        "dix-sept" => 17,
        "trois" => 3

    );
    foreach ($arr as $k => $v) {
        echo '$arr[' . $k . '] => ' . $v . '<br>';
    }
    echo '<br>';
    echo 'exemple foreach 4 : tableaux multi-dimensionnels<br>';
    $arr = array();
    $arr[0][0] = "a";
    $arr[0][1] = "b";
    $arr[1][0] = "y";
    $arr[1][1] = "z";
    foreach ($arr as $v1) {
        foreach ($v1 as $v2) {
            echo "$v2 ";
        }
        echo '<br>';
    }
    echo '<br>';
    echo 'exemple foreach 5 : tableaux dynamiques<br>';
    foreach (array(1, "trois", 3.3, "neuf", "last") as $v) {
        echo "$v ";
    }
?>
</body>
</html>
