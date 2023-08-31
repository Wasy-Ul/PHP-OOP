<?php

    class A{
        function __toString(){
             return "You can't print a object as a string of class : ".__class__." .<br>";
        }
    }
    $obj1= new A();
    // echo $obj1; // normally show an error because echo just print a string not a object

    echo $obj1; // Automatically called __toString() when we try to print a object as a string

    echo "Class Name: ".get_class($obj1)."<br>";
?>