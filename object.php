<?php
    #Object = data of class
    class Fruit{
        public $name;
        public $color;
        
        function set_name($name){
            $this->name = $name;
        }
        
        function get_name(){
            return $this->name;
        }
    }
    $apple = new Fruit();
    $orange = new Fruit();
    $apple->set_name("Apple");
    $orange->set_name("Banana");
    echo $apple->get_name()." - ".$orange->get_name();
?>