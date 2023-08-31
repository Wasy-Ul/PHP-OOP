<?php

    interface A{  // we can't create a object of a interface
        function sum($a,$b);  // we can just declare a abstract function inside a interface
        function sub($a,$b);
    }

    interface B{
        function mul($a,$b);
        function div($a,$b);
    }

    class calc implements A,B{ // A class can inherit one or more interface
        public $summation,$subtraction,$multi,$division;

        function sum($a,$b){         // you must need to implement all abstract function that you inherit
            $this->summation=$a+$b;
        }
        function sub($a,$b){
            $this->subtraction=$a-$b;
        }
        function mul($a,$b){
            $this->multi=$a*$b;
        }
        function div($a,$b){
            $this->division=$a/$b;
        }
    }
    $obj1=new calc();
    $obj1->sum(10,13);
    $obj1->mul(10,13);
    echo $obj1->summation."<br>";
    echo $obj1->multi."<br>";
?>