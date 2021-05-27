<?php
    class User{
        public $name;
        private $password;
        function __construct($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
    }
    $arman = new User("Arman");
    echo $arman->get_name();
?>