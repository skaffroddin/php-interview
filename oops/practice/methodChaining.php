<?php

class Car {
    private $color;
    private $brand;

    // Method to set color
    public function setColor($color) {
        $this->color = $color;
        return $this;  // Return the current object
    }

    // Method to set brand
    public function setBrand($brand) {
        $this->brand = $brand;
        return $this;  // Return the current object
    }

    // Method to get the car details
    public function getDetails() {
        return "Brand: $this->brand, Color: $this->color";
    }
}

// Create a Car object and chain methods
$car = new Car();
echo $car->setColor('Red')->setBrand('Toyota')->getDetails();

?>
