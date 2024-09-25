<?php

    // déclaration d'une classe
    class ClasseMere
    {
        // déclaration d'un attribut protégé
        protected $var = 'une valeur';

        // définition de la méthode Affiche
        public function Affiche()
        {
            echo "Dans la classe mère : $this->var <br>";
        }
    }

    // Déclaration de la classe ClasseFille qui hérite de ClasseMere
    class ClasseFille extends ClasseMere
    {
        // Redéfinition de la méthode Affiche
        public function Affiche()
        {
            echo "Dans la classe fille : $this->var <br>";

            // on peut appeler la méthode Affiche de la classe mère
            // en décommentant la ligne ci-dessous
            parent::Affiche();
        }
    }

?>

