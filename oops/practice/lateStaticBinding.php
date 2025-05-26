<?php

// Base class
class Animal {
    // Static method to return the name of the class using Late Static Binding
    public static function getClassName() {
        echo "Class name is: " . static::class . "<br>";  // Static binding to the called class
    }
}

// Child class
class Dog extends Animal {
    // Inherit the static method from Animal class
}

// Another Child class
class Cat extends Animal {
    // Inherit the static method from Animal class
}

// Calling static methods from different classes
Dog::getClassName();  // Will output "Dog"
Cat::getClassName();  // Will output "Cat"

?>
