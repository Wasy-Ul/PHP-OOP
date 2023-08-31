<?php

    class base{
        function __construct(){
            echo "This is a constructor of base class<br>";
        }
        function show(){
            echo "Hello World : Base<br>";
        }

        function __destruct(){
            echo "This is a destructor of base class<br>";
        }
    }

    $obj= new base(); // A constructor method is called when the object is created
    echo "Hello PHP<br>";
    $a=10;
    $b=15;
    $c=$a*$b;
    die(); // A destructor method is called before the end of the execution
    echo $c."<br>";

?>