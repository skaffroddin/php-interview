<?php

class Example {
    // Public property and method
    public $publicProperty = "I am public!";
    
    public function publicMethod() {
        echo "Public Method: " . $this->publicProperty . "<br>";
    }

    // Private property and method
    private $privateProperty = "I am private!";
    
    private function privateMethod() {
        echo "Private Method: " . $this->privateProperty . "<br>";
    }
    
    // Public method to access private property/method
    public function accessPrivate() {
        echo "Accessing Private Property: " . $this->privateProperty . "<br>";
        $this->privateMethod();
    }

    // Protected property and method
    protected $protectedProperty = "I am protected!";
    
    protected function protectedMethod() {
        echo "Protected Method: " . $this->protectedProperty . "<br>";
    }

    // Public method to demonstrate access to protected property/method
    public function accessProtected() {
        echo "Accessing Protected Property: " . $this->protectedProperty . "<br>";
        $this->protectedMethod();
    }
}

// Child class to demonstrate protected access
class ChildExample extends Example {
    public function childAccess() {
        echo "Child Access to Protected Property: " . $this->protectedProperty . "<br>";
        $this->protectedMethod();
    }
}

// Create an object of the Example class
$obj = new Example();

// Public members can be accessed directly
echo $obj->publicProperty . "<br>"; // Access public property
$obj->publicMethod();               // Access public method

// Access private members using a public method
$obj->accessPrivate();

// Access protected members using a public method
$obj->accessProtected();

// Protected members cannot be accessed directly, but can be accessed in a child class
$child = new ChildExample();
$child->childAccess();

// Uncommenting the following lines will result in errors:
// echo $obj->privateProperty;       // ERROR: Cannot access private property
// echo $obj->protectedProperty;    // ERROR: Cannot access protected property

?>
