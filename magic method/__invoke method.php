<?php

    class A{
        public $x,$y;

        function __construct($x,$y){
            $this->x=$x;$this->y=$y;
        }

        function __invoke(){ // this is a magic method, automatically called when we try to use a object as a function
            echo "The summation of $this->x and $this->y is: ".$this->x+$this->y."<br>";
        }
    }

    $obj= new A(10,20);
    $obj(); // automatically called magic method __invoke()
?>