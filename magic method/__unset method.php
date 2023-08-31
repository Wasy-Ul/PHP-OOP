<?php

     $var="Hello World";
     echo $var."<br>";     
     unset($var); // destroy or delete a variable
     //echo $var."<br>"; // show an error because $var is deleted 

     class A{
        public $country="Bangladesh";
        private $city="Rajshahi";

        function __get($property){
             if(property_exists($this,$property)){
                 return $this->$property;
             }
             else{
                echo "Undefined Property<br>";
             }
        }

        function __unset($property){ // __unset() is automatically called when we try unset private property from outside of the object
            unset($this->$property);
        }
     }

     $obj= new A();

     echo $obj->country."<br>";
     echo $obj->city."<br>";
     echo $obj->city1."<br>";

     unset($obj->country);
     //echo $obj->country."<br>";
     unset($obj->city);
     //echo $obj->city."<br>";

?>