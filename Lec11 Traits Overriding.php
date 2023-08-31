<?php
    // example of trait method overriding
    trait test1{
        function show(){
            echo "Hello test1 trait<br>";
        }
    }

    class A{
        use test1;
        function show(){
            echo "Hello Class A<br>";
        }
    }

    class B extends A{
        use test1;
    }

    $obj1=new A();
    $obj1->show();

    $obj2=new B();
    $obj2->show();

    // example of trait

    trait test2{
        function sum(){
            return 5+5;
        }        
        function sub(){
            return 10+5;
        }        
        function show(){
             echo "This is test2 trait<br>";
        }        
    }

    trait test3{
        function mul(){
            return 5*5;
        }        
        private function div(){
            return 10/5;
        }        
        function show(){
            echo "This is test3 trait<br>";
            
       }        
    }

    class C{
        // use test2,test3; show an error because test2 and test3 both has a show(). But we can solve it
        use test2,test3{ 
            test2::show insteadof test3; //define that use the show() of trait test2
            test3::show as display; // also say use show() of test3 as a display()
            test3::div as public; // we also define private method as a public
        }
   }
   echo "<br><br>";
   $obj3=new C();
   $obj3->show();
   $obj3->display();
   echo $obj3->div();

?>