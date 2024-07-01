<!--Polymorphism-->
<!--The idea that methods that do tyhe same thing should have the same name-->

<?php
Interface Shape {
    public function calcArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius){
        $this -> radius = $radius;
    }
    public function calcArea(){
        return $this ->radius * $this->radius * pi();
    }

}

class Rectangle implements Shape
{
    private $length;
    private $width;
    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calcArea()
    {
        return $this->length * $this->width;
    }
}

//instantiate

$rectangle = new Rectangle(6,5);
$circle = new Circle(7);

//call the shared method
echo $rectangle->calcArea();
echo "<br/>";
echo $circle->calcArea();