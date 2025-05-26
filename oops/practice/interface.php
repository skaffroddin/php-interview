<?php

// Interface
// An interface defines a contract for classes. It can only contain method declarations (no implementation).
interface Animal {
    public function sound(); // Method declaration
    public function habitat(); // Method declaration
}

// Class: Dog
// This class implements the Animal interface and provides definitions for all the methods declared in the interface.
class Dog implements Animal {
    public function sound() {
        echo "Dog says: Woof! Woof!<br>";
    }

    public function habitat() {
        echo "Dog lives in homes or kennels.<br>";
    }
}

// Class: Cat
// This class implements the Animal interface and provides definitions for all the methods declared in the interface.
class Cat implements Animal {
    public function sound() {
        echo "Cat says: Meow! Meow!<br>";
    }

    public function habitat() {
        echo "Cat lives in homes or sometimes in the wild.<br>";
    }
}

// Create objects
$dog = new Dog();
$dog->sound(); // Output: Dog says: Woof! Woof!
$dog->habitat(); // Output: Dog lives in homes or kennels.

$cat = new Cat();
$cat->sound(); // Output: Cat says: Meow! Meow!
$cat->habitat(); // Output: Cat lives in homes or sometimes in the wild.

?>
