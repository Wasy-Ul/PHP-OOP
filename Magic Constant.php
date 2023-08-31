<?php

    namespace myNameSpace;

    echo "The Line Number Is: ".__LINE__."<br>";// this constant return the line number

    echo "The Full Path of This File Is: ".__FILE__."<br>"; // Return path of this file

    echo "The Full Path of This Directory: ".__DIR__."<br>"; // return the path of this directory

    function myFunction(){
        echo "The Function Name Is: ".__FUNCTION__."<br>"; //return the function name inside a function
    }

    myFunction();

    trait myTrait{
        static function getTraitName(){
            echo "The Trait Name Is: ". __TRAIT__ ."<br>"; // return the trait name if the method belongs from a trait
        }
    }

    class test{
        static function className(){
            echo "The class name is: ".__CLASS__."<br>"; // return the class name inside a class

            echo "The method name is: ".__METHOD__."<br>"; // return the method name inside a method
        }
        use myTrait;
        
    }
    test::className();
    test::getTraitName();
     
    echo "Namespace: ".__NAMESPACE__."<br>";

?>