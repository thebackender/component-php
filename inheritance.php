<?php
    class User{
        public $name;
        public $password;
        public function __construct($name, $password){
            $this->name = $name;
            $this->password = $password;
        }
        public function show_password(){
            return $this->password;
        }
    }
    class Admin extends User{
        public function check(){
            if($this->name == "admin" && $this->password == "pass"){
                return true;
            }else{
                return false;
            }
        }
    }
    $admin = new Admin("admin", "a");
    echo $admin->show_password();
    if($admin->check()){
        echo "<br> Welcome";
    }else{
        echo "Fuck You";
    }
?>