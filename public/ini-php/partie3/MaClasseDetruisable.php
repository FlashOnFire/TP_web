<?php
    // définition de la classe MaClasseDetruisable
    class MaClasseDetruisable
    {
        // un attribut privé
        private $name;

        // le constructeur de la classe
        // c'est une fonction qui s'appelle "__construct"
        function __construct($message)
        {
            print "Constructeur...<br>";
            $this->name = $message;
        }

        // le destructeur de la classe
        // c'est une fonction qui s'appelle "__destruct"
        function __destruct()
        {
            print 'Destruction de "' . $this->name . '"<br>';
        }
    }
?>