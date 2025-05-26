<?php

// Define a trait
trait Greeter {
    // Method in the trait
    public function greet($name) {
        echo "Hello, $name!<br>";
    }
}

// Class using the trait
class Person {
    use Greeter;  // Include the Greeter trait

    public function introduce($name) {
        echo "I am $name.<br>";
    }
}

// Create an instance of the Person class
$person = new Person();
$person->greet("Alice");  // Call the method from the trait
$person->introduce("Alice");  // Call the method from the class

?>
