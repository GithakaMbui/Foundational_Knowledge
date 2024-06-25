<!--1. the public access modifier allows a code from outside or inside the class to access the class’s methods and properties,-->
<!--2. the private modifier prevents access to a class’s methods or properties from any code that is outside the class.-->
<!---->
<!--The public access modifier-->

<?php
class Car {
// Public methods and properties public $model;
public function getModel() {
    return "The car model is " . $this -> model;
}
}
$mercedes = new Car();

// Here we access a property from outside the class
 $mercedes -> model = "Mercedes";

// Here again we access another method from outside the class
echo $mercedes -> getModel();
echo "</br>"; echo "</br>";
?>

<!--//The private access modifier-->
<?php
class Gari {
//Private private $model;
    public function getModel() {
        return "The car model is " . $this -> model; }
}
$mercedes = new Gari();
// We try to access a private property from outside the class.
$mercedes -> model = "Mercedes";
echo $mercedes -> getModel();
echo "</br>"; echo "</br>";
?>


<!--How to access a private property?-->
<!---->
<!--WE use two kinds of methods:-->
<!--• Setters that set the values of the private properties. -->
<!--• Getters that get the values of the private properties.-->

<?php
class Bike {
// The private access modifier denies access to the method // from outside the class’s scope
private $model;
// The public access modifier allows the access to the method // from outside the class
public function  setModel($model)
{

    $this -> model = $model;
}
    public function getModel() {
    return "The bike model is " . $this -> model;
}
}

//instanitiate the Motorbike model
$bmw = new Bike();

// Set the bike’s model
$bmw -> setModel("BMW");

// Get the bike’s model echo
echo $bmw -> getModel();
?>


