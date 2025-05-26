<?php

class Example {
    public $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        echo "Object for $name is created.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Object for $this->name is destroyed.<br>";
    }
}

// Creating objects
$obj1 = new Example("Alice");
$obj2 = new Example("Bob");

// Unsetting one object explicitly
unset($obj1);

// Script ends here, destructor will be called for remaining objects

?>
