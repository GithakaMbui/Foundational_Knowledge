
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
echo "</br>"; echo "</br>";
?>

<!--                            Magic constants-->
<!--We use the magic constant __CLASS__ (magic constants are written in uppercase letters-->
<!--and prefixed and suffixed with two under lines) inorder to get the name of the class in which it resides.-->

<?php
class Bike {
    private $model = '';
// The constructor
public function __construct($model = null)
{ if($model)
{ $this -> model = $model;
}
}
public function getCarModel() { // We use the __class__ magic constant // in order to get the class name
    return " The <b>" . __class__ . "</b> model is: " . $this -> model;
}
}
$car1 = new Bike('RangeRover Sport');
echo $car1 -> getCarModel();

?>