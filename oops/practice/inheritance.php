<?php

class employee {

    public $name;
    public $age;
    public $salary;



    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
       


    }


    function info() {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }



}


class manager extends employee{

    public $phone=2000;
    public $totalSalary;
    
    
    function info() {
        $this->totalSalary = $this->salary + $this->phone;
        echo "<h3>Manager Profile</h3>";

        echo "Manager name ".$this->name."<br>";
        echo "Manager age"  .$this->age."<br>";

        echo "Manager Salary" .$this->totalSalary."<br>";
    }



}





$e= new employee("Affy",27,10000);

$m= new manager("Gadha",30,30000);
$e->info();
$m->info();

    



?>