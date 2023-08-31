<?php

    class A{
        private $name="Bangladesh";

        function show(){
            echo $this->name."<br>";
        }

        function __get($name){ // __get($name) is a magic method which is automatically called when we try to access private or undefined property
            echo "$name is a undefined or private property <br>";
        }
    }

    $obj= new A();
    echo $obj->name; // name is a private property

    echo $obj->age; // age is a undefined property

    echo $obj->show();

    $obj->name1="BD";

    class B{
        private $name="London";

        function __get($name){ // __get() method also can return the private property
            if(property_exists($this,$name)){
                return $this->$name."<br>";
            }
            else{
                echo "$name is a undefined property.<br>";
            }
        }
    }

     $obj1= new B();
     echo $obj1->name;
     echo $obj1->City;

?>