<?php
    namespace Thing;
    class Table{
        public $color = "red";
        public function get_color(){
            echo "Color: {$this->color}";
        }
    }
?>