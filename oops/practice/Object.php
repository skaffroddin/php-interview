<?php

class calculation {

public $a, $b, $c;

function sum (){
$this->c = $this->a + $this->b;
return $this->c;
}


function less (){

    $this->c = $this->a - $this->b;
    return $this->c;
}

}


$c1 = new calculation();
$c1->a = 10;
$c1-> b= 5;
echo "Sum is ". $c1->sum() ;
echo "Less is " . $c1->less();


?>