<?php
    namespace Data;
    class Table{
        public $title = "";
        public $rows = 0;
        public function message(){
            echo "Table: {$this->title} - {$this->rows}";
        }
    }
?>