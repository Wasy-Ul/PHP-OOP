<?php

    abstract class base{  // this is a abstract class. We can't create a object of abstract class. But derived class can inherit it's 
                         // property and method

        public $name="This is a base property<br>";
        abstract protected function calc($a,$b); // abstract function of abstract class
        function show(){} // also declare normal method
    }

    class derived extends base{
        function calc($c,$d)
        {
            return $c+$d."<br>";
        }
    }

    // $obj1= new base(); // can't create a object of base class because it is a abstract class
    $obj1= new derived();    
    echo $obj1->name;
    echo $obj1->calc(10,10);

?>