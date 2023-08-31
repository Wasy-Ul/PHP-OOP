<?php

        class  A{
            private $name;

            function set($name,$age)
            {
                $this->name=$name;
                $this->age=$age;
            }

            function get()
            {
                return $this->name." &nbsp;".$this->age;
            }
        }

        class B extends A {
            
            function show()
            {
                echo $this->name."<br>";
            }        
        }

        // Object of class A

        $obj1=new A(); // create a object of class A
        $obj1->set("Niton A",49); // set the value of $name property and create a public property $age and set it's value also
        echo $obj1->get()."<br>"; // return the value of private and public property
        echo $obj1->age."<br>"; // access the public property from out of the object
        //echo $obj1->name."<br>"; // can not access the private property from out of the object
        $obj1->salary=8000; // create a public property $salary only for object $obj1. It can't change the Template of A
        echo $obj1->salary."<br>"; // access this public property only for $obj1


        echo "<br><br>";
        // Object of class B

        $obj2=new B(); // create a object of class B. Derived class (B) inherit the public property $age and method set(), get(). Derived   
                    // class can't access or inherit the private property of base class like $name.

        $obj2->set("Niton B",33); // create a property $name only for the inherited methods and set the value of $name and public inherited 
                                //  property $age

        echo $obj2->get()."<br>"; // return the value of inherited public property of $obj2 but $name is not a property of $obj2. $name is
                                // only accessible by the inherited methods

        echo $obj2->age."<br>";  // accessible because $age is public property of $obj2

        // echo $obj2->name; // cann't accessible because there are no $name property for $obj2

        $obj2->name="Niton for Obj2"; // create a new $name property only for $obj2
        echo $obj2->name."<br>";  // this can't change template of class B

        echo $obj2->show(); // show() is a member function of class B. This function only works when $name property is separately defined for
                            // a particular object like, $obj2 and show() called through this object.

        echo $obj2->get()."<br>"; // Again return the value of $name which is only accessible by inherited methods and the public property
                                // $age of $obj2
 

?>