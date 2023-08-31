<?php

    class A{
        private $fname,$lname;

        private function set($fname, $lname){
            $this->fname=$fname;$this->lname=$lname;
        }

        function __call($method, $args){ // magic method automatically called when try to call the private ot undefined method
            if(method_exists($this,$method)){ // method_exist() check the particular method is exist inside a object or not
                call_user_func_array([$this,$method],$args); // this function helps to call the set() inside a object
            }
            else{
                echo "$method is undefined method.<br>";
            }
        }
    }

    $obj1= new A();
    $obj1->set("Biplob","Borua"); // automatically invoke the __call()
    $obj1->show("Biplob","Borua"); // automatically invoke the __call()
?>