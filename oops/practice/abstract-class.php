<?php

// Abstract class
// An abstract class acts as a blueprint for other classes. It can have both abstract methods (methods without a body) and regular methods (methods with a body).
abstract class Animal {
    // Abstract method
    // An abstract method is declared but not implemented here. It must be implemented in the child class.
    abstract public function sound();

    // Regular method
    // A regular method has a body and can be directly used or inherited by child classes.
    public function sleep() {
        echo "Sleeping...<br>";
    }
}

// Child class: Dog
// This class extends the abstract class 'Animal' and implements the abstract method 'sound()'.
class Dog extends Animal {
    public function sound() {
        echo "Dog says: Woof! Woof!<br>";
    }
}

// Child class: Cat
// This class extends the abstract class 'Animal' and implements the abstract method 'sound()'.
class Cat extends Animal {
    public function sound() {
        echo "Cat says: Meow! Meow!<br>";
    }
}

// Create objects of child classes
// Objects of abstract classes cannot be created, but objects of their child classes can be created.
$dog = new Dog();
$dog->sound(); // Calls the Dog-specific implementation of 'sound()'
$dog->sleep(); // Calls the regular method 'sleep()' from the parent class

$cat = new Cat();
$cat->sound(); // Calls the Cat-specific implementation of 'sound()'
$cat->sleep(); // Calls the regular method 'sleep()' from the parent class

?>
