<?php

    class A{
        public $name="Hello World";

        function calc()
        {
            return 5*10;
        }
    }

    class B extends A{
        
    }

    $obj1= new A();

    echo $obj1->name."<br>";

    $obj2= new B();
    echo $obj2->name."<br>";
    echo $obj2->calc()."<br>";

    // Example of Overriding

    class base{
        public $name="This is base class<br>";

        function calc()
        {
            return 5*10;
        }
    }

    class derived extends base{
        public $name="This is derived class<br>"; // this is called property overriding

        function calc() // this is called method overriding. We can just change the function body not function prototype like, parameters
        {
            return 5+10;
        }
    }

    $obj3= new derived();
    echo $obj3->calc()."<br>";
    echo $obj3->name;

?>