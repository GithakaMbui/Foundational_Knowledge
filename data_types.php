<!--An important side effect of PHP’s weak typing is that if you enclose an integer or floating-point number in quotes, PHP automatically converts it from a string to a number, allowing you to perform calculations without the need for any special handling. -->
<!--This can have unexpected consequences. When PHP sees the plus sign (+), it assumes you want to perform addition, and thus it tries to convert strings to integers-->
<?php
$fruit = '2 apples ';
$veg = '2 carrots';
$fruitandveg = $fruit + $veg;
echo $fruitandveg;
echo "</br>";

// Checking the Data Type of a Variable we use var_dump()
var_dump($fruitandveg);
?>