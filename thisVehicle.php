<?php
//The $this property is a shortcut to reference the current class instance.
//You can use it to access class properties and other methods from within a class method


//The $this keyword indicates that we use the class’s own methods and properties,
//and allows us to have access to them within the class’s scope

//Define a Vehicle class
class Vehicle {
    //declare properties/attributes
var $model;
var $year_of_manufacture;
var $color;
var $mileage;

//declare a method
function summary(){
    echo 'Model of the vehicle is ' . $this->model . "<br/>";
    echo 'The year of manufacture is ' . $this->year_of_manufacture . "<br/>";
    echo "The mileage is " . $this->mileage . "<br/>";
}

}

// Create a new vehicle instance
$car = new Vehicle;

// set class properties
$car->model = 'Mazda X50';
$car->mileage = 50000;
$car->year_of_manufacture = 2014;

//Output a vehicle summary
$car->summary();


