<?php

    class Person{

        public $name, $age;
        
        function __construct($name="John",$age=23){ // Constructor with parameter and default value
            $this->name=$name; $this->age=$age;
        }

        function show(){
            echo "Name: ".$this->name." &nbsp Age: ".$this->age."<br>";
        }
    }

    $obj1=new Person("Tamim Ikbal",23); // Constructor is automatically called when object created

    $obj1->show();

    $obj2=new Person(); // create a object with no argument

    $obj2->show();

?>