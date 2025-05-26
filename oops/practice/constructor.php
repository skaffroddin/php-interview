<?php

class person {

public $name;
public $age;

function __construct($name="No name", $age=0 ){

$this->name= $name;
$this->age =$age;

}

function show(){

    echo "Name is ".$this->name . "Age is ".$this->age  ."<br>";
}

}


$p1 = new person("Affy",6);
$p2= new person("ff",26);
$p1->show();
$p2->show();






?>