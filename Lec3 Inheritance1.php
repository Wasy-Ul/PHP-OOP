 <?php
    class Employee{  // Parent Class
        public $name,$age,$salary;

        function __construct($name,$age,$salary){  // Constructor
             $this->name=$name;$this->age=$age;$this->salary=$salary;
        }

        function show()
        {
            echo "<h2>Employee Status</h2>";
            echo "Name: ".$this->name."<br>";
            echo "Age: ".$this->age."<br>";
            echo "Salary: ".$this->salary."<br>";
        }
    }

    class Manager extends Employee{ // Child Class get the all properties and method of parent class
        public $intensive=2000;
        function show()
        {
            echo "<h2>Manager Status</h2>";
            echo "Name: ".$this->name."<br>";
            echo "Age: ".$this->age."<br>";
            echo "Salary: ".$this->salary+$this->intensive."<br>";
        }
    }

    $emp1= new Employee("Imran Sarker",28,2000);
    $emp2= new Employee("Kumar Sarker",26,3200);

    $emp1->show(); $emp2->show();

    $manager1= new Manager("Biplob Borua",32,10000);

    $manager1->show();
 ?>