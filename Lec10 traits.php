<?php

    trait multi_func{
        function sum($a,$b)
        {
            echo "The summation is: ".$a+$b."<br>";
        }

        function sub($a,$b)
        {
            echo "The subtraction is: ".$a-$b."<br>";
        }
        
    }

    class A{

        use multi_func;         
    }
    class B{
        use multi_func;
    }

    class C{
        use multi_func;
    }

    $obj1=new A();
    $obj1->sum(10,5);

    $obj2=new B();
    $obj2->sub(18,20)
     

?>