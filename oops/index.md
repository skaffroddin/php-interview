OOP::

Class: A blueprint for creating objects. It defines properties (attributes) and methods (functions) that the object will have.

<?php
class Car {
    public $color;
    public $model;

    public function drive() {
        echo "The car is driving.";
    }
}
?>

Object: An instance of a class. It is like a real-world entity created using the blueprint.

<?php
class Car {
    public $color;

    public function drive() {
        echo "The car is driving.";
    }
}

$myCar = new Car(); // Create an object
$myCar->color = "Red"; // Set property
echo $myCar->color; // Output: Red
$myCar->drive(); // Output: The car is driving.
?>


Constructor: A special method that runs automatically when an object is created. It is used to initialize properties.

Destructor: A special method that runs automatically when an object is destroyed. It is used for cleanup tasks.


<?php
class Car {
    public $color;

    // Constructor
    public function __construct($color) {
        $this->color = $color;
        echo "A $this->color car is created.\n";
    }

    // Destructor
    public function __destruct() {
        echo "The $this->color car is destroyed.\n";
    }
}

// Create an object
$myCar = new Car("Red"); // Output: A Red car is created.
// Destructor is called automatically at the end of the script
?>


Access specifiers (also known as visibility keywords) determine the accessibility of properties and methods in a class. There are three main types in PHP:

public: Can be accessed from anywhere, both inside and outside the class.

protected: Can be accessed only within the class and by classes that inherit from it.

private: Can be accessed only within the class that defines the property or method.


<?php
class Car {
    public $color;  // Public property
    protected $model; // Protected property
    private $price;  // Private property

    // Constructor
    public function __construct($color, $model, $price) {
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }

    // Public method
    public function showColor() {
        echo "The car color is: $this->color\n";
    }

    // Protected method
    protected function showModel() {
        echo "The car model is: $this->model\n";
    }

    // Private method
    private function showPrice() {
        echo "The car price is: $this->price\n";
    }
}

$car = new Car("Red", "Toyota", 20000);
$car->showColor();  // Works fine, public method

// The following will cause errors:
// $car->showModel();  // Error: Cannot access protected method
// $car->showPrice();  // Error: Cannot access private method
?>


Public, protected, and private access specifiers only apply to properties and methods inside the class.


<?php
// Parent Class
class Car {
    public $color;
    protected $model;
    private $price;

    // Constructor
    public function __construct($color, $model, $price) {
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }

    // Public method
    public function showColor() {
        echo "The car color is: $this->color\n";
    }

    // Protected method
    protected function showModel() {
        echo "The car model is: $this->model\n";
    }

    // Private method (not inherited)
    private function showPrice() {
        echo "The car price is: $this->price\n";
    }
}

// Child Class inheriting from Car
class ElectricCar extends Car {
    public $batteryLife;

    // Constructor
    public function __construct($color, $model, $price, $batteryLife) {
        // Calling the parent class constructor
        parent::__construct($color, $model, $price);
        $this->batteryLife = $batteryLife;
    }

    // Method to show battery life
    public function showBatteryLife() {
        echo "Battery life is: $this->batteryLife hours.\n";
    }

    // Accessing protected method of parent class
    public function showModelInfo() {
        $this->showModel();  // This works because showModel() is protected
    }

    // Trying to access private method (will result in an error)
    public function showPriceInfo() {
        // $this->showPrice();  // This will cause an error because showPrice() is private in the parent class
    }
}

// Create an object of the child class
$myElectricCar = new ElectricCar("Blue", "Tesla Model S", 80000, 24);

// Accessing public method
$myElectricCar->showColor();  // Output: The car color is: Blue

// Accessing public method from child class
$myElectricCar->showBatteryLife();  // Output: Battery life is: 24 hours

// Accessing protected method from parent class
$myElectricCar->showModelInfo();  // Output: The car model is: Tesla Model S

// Accessing private method from parent class (will not work)
// $myElectricCar->showPriceInfo();  // Error: Cannot access private method
?>



PHP Inheritance
Inheritance in PHP allows a class (called the child class or subclass) to inherit properties and methods from another class (called the parent class or superclass). This mechanism promotes code reusability, where the child class can use methods and properties from the parent class without needing to re-write them.

Types of Inheritance in PHP:
Single Inheritance: A class can inherit from one parent class.

Multiple Inheritance: PHP does not support multiple inheritance directly. However, you can achieve this through interfaces or traits.

Multilevel Inheritance: A class can inherit from another class, which itself is a subclass of another class.


Abstraction in PHP
Abstraction is a fundamental concept in Object-Oriented Programming (OOP) that allows you to hide the complex implementation details and show only the essential features of an object or class. In simpler terms, abstraction focuses on what an object does, rather than how it does it.

In PHP, abstraction is achieved using:

Abstract Classes: A class that cannot be instantiated directly and is meant to be inherited by other classes.

Abstract Methods: Methods declared in an abstract class that must be implemented in any child class.


Key Points About Abstraction:
Abstract Classes:

Cannot be instantiated directly.

Can contain both abstract methods (methods without a body) and concrete methods (methods with a body).

Used to provide a common interface or blueprint for child classes.

Abstract Methods:

Defined in an abstract class but have no body.

Must be implemented by the child classes that extend the abstract class.
















<<<<<<<<<<<< OOPS Question And Answer >>>>>>>>>>>

What is Object-Oriented Programming? How is it different from Procedural Programming?
What are the main principles of OOP?
Explain Encapsulation, Inheritance, Polymorphism, and Abstraction.
What is a class and an object in PHP? Provide an example.
What is the difference between public, private, and protected access modifiers in PHP?
What is a constructor and destructor in PHP? Give an example?
What is inheritance? How does PHP support inheritance?
Can PHP support multiple inheritance? If not, how can it be achieved?
What is the difference between an abstract class and an interface in PHP?
Can a class implement multiple interfaces?
When would you use an interface over an abstract class?
What are static properties and methods? When would you use them?
What is the self vs this keyword in PHP OOP?
What is late static binding in PHP?
What is the purpose of the final keyword in PHP?
What is a trait in PHP and why is it used?
What is dependency injection? How can it be implemented in PHP?
What are magic methods in PHP? Name a few and their purpose (__get, __set, __call, __toString, etc.)
What is method overriding in PHP? How does it work in inheritance?
Does PHP support method overloading like Java? Why or why not?
How can you achieve polymorphism in PHP?
