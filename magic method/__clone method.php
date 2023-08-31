<?php

    // This is the copy by value
     $a=10;$b=$a;
     echo $b."<br>";
     $b=5;
     echo $b."<br>";
     echo $a."<br><br><br>";

     // This is the copy by reference
     $a=10; 
     $b= & $a; // copy by reference that means $a and $b point the same memory address
     echo $b."<br>";
     $b=5;
     echo $b."<br>";
     echo $a."<br>";

     class A{
        public $country="Bangladesh";
     }

     $obj=new A();
     echo $obj->country."<br>";
     $obj2=$obj; // this time happening copy by reference
     echo $obj2->country."<br>";
     $obj2->country="Argentina";
     echo $obj->country."<br>";
     echo $obj2->country."<br><br><br>";

     $obj3= clone $obj; // this time not copy by reference. Just clone $obj into a $obj3. $obj3 is a another object of Class A
     echo $obj3->country."<br>";
     $obj3->country="Brazil";
     echo $obj3->country."<br>";
     echo $obj2->country."<br>";
     echo $obj->country."<br><br><br>";

     class B{
        public $president="Joe Biden";
        public $country2;

        function __construct(A $country){ // type hinting $country must be a object of class A. Here $country is tottaly anew object because we use $obj3 as a clone argument

            $this->country2=$country;
        }

        function __clone(){
            $this->country2= clone $this->country2;             
        }
     }

     $obj4= new B(clone $obj3); // $obj3 is a argument as a clone
     echo "<pre>";
     print_r($obj4);
     echo "</pre>";
     echo $obj4->president."<br>";
     $obj4->country2->country="Srilanka";
     echo $obj4->country2->country."<br>";
     echo $obj3->country."<br>"; // never change the value of country of $obj3 because $obj3 is argument as clone  

     $obj5= clone $obj4 ;
     
     // here $obj4 and $obj5 is object of class B. $obj5 is the exact clone of $obj4 but it is a another object of class B. But there is little problem here the property $country2 of both $obj4 and $obj5 hold the same object of class A. So when we change the value of $country2 any of them then actually change the both $country2 property of $obj4 and $obj5. Because, when $obj4 is cloned for $obj5, no inner object can be cloned of $obj4. But we can fix it by __clone() method. __clone() magic method automatically called for $obj5 when $obj4= new B(clone $obj3); is executed.

     $obj5->country2->country="Africa";     

     echo "<pre>";
     print_r($obj5);
     echo "</pre>";

     echo "<pre>";
     print_r($obj4);
     echo "</pre>";

?>