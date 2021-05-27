<?php
    class User{
        function __construct($name)
        {
            $this->name = $name;
        }
        function __destruct()
        {
            echo $this->name;
        }
    }
    $arman = new User("Arman");
?>