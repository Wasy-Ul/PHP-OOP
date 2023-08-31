<?php

    class A{
        private $city;

        function __get($name){ // __get() automatically called when we try to access the private or undefined property

            if(property_exists($this,$name)){ // property_exists() return that if the property exists or not
                return $this->$name; // if the property exists then return it
            }
            else{
                echo "$name is a Undefined property.<br>"; // Otherwise show that this is a undefined property
            }
        }

        function __set($property,$value){ // remember __set() is automatically called when we try to set a value of private property

            if(property_exists($this,$property)){
                $this->$property=$value;
            }
            else{
                echo "$property is undefined.<br>";
            }
        }
    }

    $obj1=new A();
    $obj1->city="California"; // __set() is called automatically at this line
    echo $obj1->city."<br>"; // __get() is called automatically at this line
    $obj1->area="area 51";
    echo $obj1->area;

     

?>