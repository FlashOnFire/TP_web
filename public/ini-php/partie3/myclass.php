<?php

    /**
     * Définition de MyClass
     */
    class MyClass
    {
        public $UnPublic = 'Public';
        protected $UnProtected = 'Protected';
        private $UnPrivate = 'Private';

        public function printHello()
        {
            echo $this->UnPublic;
            echo $this->UnProtected;
            echo $this->UnPrivate;
        }
    }

?>