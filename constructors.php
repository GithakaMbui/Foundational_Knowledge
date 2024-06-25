
<!--            The  __construct() magic method-->

<!--We use __construct() in order to do something as soon as we create an object out of a class.-->
<!--A method of this kind is called a constructor. -->
<!--Usually we use the constructor to set a value to a property. -->
<?php
class Car { // The $model property has a default value of "N/A"
  private $model = "";

// We don't have to assign a value to the $model property
// // since it already has a default value
public function __construct($model = null)
{
    if($model)
    {
        $this -> model = $model;
    }
}
public function getCarModel() {
    return ' The car model is: ' . $this -> model;
}
}
// We create the new Car object // without passing a value to the model

$car1 = new Car();
echo $car1 -> getCarModel();
echo "</br>";

// Create another car Object and pass a value to it
$car1 = new Car('Toyota Prado VX');
echo $car1 -> getCarModel();

?>
