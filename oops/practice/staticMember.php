<?php

class Animal {
    // Static property
    public static $category = "Mammal";

    // Static method to return the category of the animal
    public static function getCategory() {
        return self::$category;  // Using 'self' to access the static property of the current class
    }
}

class Dog extends Animal {
    // Static property specific to Dog class
    public static $category = "Canine";

    // Static method overriding the parent method
    public static function getCategory() {
        return parent::$category . " - " . self::$category;  // Using 'parent' to access static property from the parent class and 'self' for this class's property
    }
}

// Calling the static method from the Animal class
echo "Animal Category: " . Animal::getCategory() . "<br>";  // Output: Mammal

// Calling the static method from the Dog class
echo "Dog Category: " . Dog::getCategory() . "<br>";  // Output: Mammal - Canine

?>
