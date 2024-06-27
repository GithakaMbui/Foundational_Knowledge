<?php
class Panda
{// Properties
    var $coat = 'fluffy';
    var $colour;

// // Method
    function getCoat()
    {
        return $this->coat;
    }

// // Method
    function getColour()
    {
        return $this->colour;
    }
}

class GiantPanda extends Panda
{ // DUN DUN DUUUUUUN!
}

// Create a new giant panda instance.
 $giantPanda = new GiantPanda;

// Get coat type.
 echo $giantPanda->getCoat();

echo "</br>"; echo "</br>";
 ?>


<!--A child class can  have its own methods and properties-->

<?php
// The parent class has its properties and methods
class Car { // A private property or method can be used only by the parent private $model;
// Public methods and properties can be used // by both the parent and the child classes
 public function setModel($model)
 {
     $this -> model = $model;
 }
public function getModel() {
     return $this -> model;
 }
}
// The child class can use the code it inherited from the parent class, // and it can also have its own code
class SportsCar extends Car {
private $style = 'fast and furious';
public function driveItWithStyle() {
    return 'Drive a ' . $this -> getModel() . ' <i>' . $this -> style . '</i>'; }
}

// Create an instance from the child class
$sportsCar1 = new SportsCar();

// Use a method that the child class inherited from the parent class
 $sportsCar1 -> setModel('Ferrari');
// Use a method that was added to the child class
echo $sportsCar1 -> driveItWithStyle();
?>