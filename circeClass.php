<!--   This is to demonstrate the use of PHP CONSTANTS-->
<?php
class Circle  {
    /** 6 * The value of PI. 7 */
    const PI = 3.14159265359;
    /** 11 * Calculate the circumference of a circle from diameter.
     * * @param mixed $diameter 14 *
     * @return mixed 15 */
    public function circumference($diameter)  {
        return $diameter * self::PI;
         }
}

//Using the Circle class

$circle = new Circle;
echo $circle->circumference(32);

echo "<br/>";

//n
echo$circle::PI;
return$diameter*self::PI;

