<?php
abstract class Car {
    // Abstract classes can have properties
protected $tankVolume;

// Abstract classes can have non abstract methods
 public function setTankVolume($volume) {
     $this -> tankVolume = $volume;
 }
// Abstract method
abstract public function calcNumMilesOnFullTank();

}

//to create child classes from an abstract class
class Honda extends Car {
    // Since we inherited abstract method,
// // we need to define it in the child class,
// // by adding code to the method's body.
public function calcNumMilesOnFullTank() {
    $miles = $this -> tankVolume*30;
    return $miles;
}

    public function getColor()
    {
        return "beige";
    }

}
// create a new object, $toyota1, with a full tank volume of 10 Gallons, and make it return
//    the number of miles on full tank as well as the car’s color
$toyota1 = new Honda();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank();
echo "<br/>";
echo $toyota1 -> getColor();

?>