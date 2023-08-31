<?php
    class calCulation{
        public $a,$b,$c;

        function sum()
        {
            $this->c=$this->a+$this->b;
            return $this->c;
        }

        function sub()
        {
            $this->c=$this->a-$this->b;
            return $this->c;
        }
    }

    $obj1=new calCulation(); $obj2=new calCulation();

    $obj1->a=20; $obj1->b=10;

    echo "The value of Summation : ".$obj1->sum()."<br>";

    echo "The value of Subtraction : ".$obj1->sub()."<br>";

    $obj2->a=40; $obj2->b=15;

    echo "<br>The value of Summation : ".$obj2->sum()."<br>";
    echo "The value of Subtraction : ".$obj2->sub()."<br>";

?>