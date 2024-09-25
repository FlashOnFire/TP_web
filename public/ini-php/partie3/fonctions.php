<?php
    // Renvoie le produit de $x et $y
    function produit($x, $y): float|int
    {
        return $x*$y;
    }

    // A FAIRE
    // écrire la fonction permut_valeur
    function permut_valeur($x, $y): void
    {
        echo "Dans la fonction, avant permutation : x = $x, y = $y <br>";
        $temp = $x;
        $x = $y;
        $y = $temp;
        echo "Dans la fonction, après permutation : x = $x, y = $y <br>";
    }

    // A FAIRE
    // écrire la fonction permut_reference
    function permut_reference(&$x, &$y): void
    {
        echo "Dans la fonction, avant permutation : x = $x, y = $y <br>";
        $temp = $x;
        $x = $y;
        $y = $temp;
        echo "Dans la fonction, après permutation : x = $x, y = $y <br>";
    }
?>
