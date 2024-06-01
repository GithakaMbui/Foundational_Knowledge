<!--An important side effect of PHP’s weak typing is that if you enclose an integer or floating-point number in quotes, PHP automatically converts it from a string to a number, allowing you to perform calculations without the need for any special handling. -->
<!--This can have unexpected consequences. When PHP sees the plus sign (+), it assumes you want to perform addition, and thus it tries to convert strings to integers-->
<?php
$fruit = '2 ';
$veg = '2';
$fruitandveg = $fruit + $veg;
echo $fruitandveg;
echo "</br>";

// Checking the Data Type of a Variable we use var_dump()
var_dump($fruitandveg);
echo "</br>";
?>

<!--Primitive Data Types-->
<!--These are 8 in number. These are:-->
<!--1. Boolean-->
<!--2. Integer-->
<!--3. Float-->
<!--4. String-->
<!--5. Array-->
<!--6. Object-->
<!--7. Resource -->
<!--8. Null-->

<!--1. Boolean primitive Data Type-->
<!--syntax-->
<?php
if(True)
    echo "This condition is True";
if(False)
    echo "This condition is false";
echo "</br>";
echo "</br>";
?>

<!--example 1-->
<!--the name either evaluates to True or False.-->
<?php
 $name = "panda";
 if($name == "pana"){
     echo "Yes you have gotten the name right";
 }
 else{
     echo "You have gotten the name wrong";
 }
echo "</br>";
echo "</br>";
 ?>

<!--2. Integer Data Types-->
<?php
$baseTenNumber = 34;
$numberOctal = 0243;
$hexaNumber = 0x45;

echo "base Ten number is: " .$baseTenNumber. "</br>";
echo "Octal number is: " .$numberOctal. "</br>";
echo "HexaDecimal number is: " .$hexaNumber. "</br>";
echo "The Octal number is $numberOctal";

echo "</br>";
echo "When you add \n " .$numberOctal. "\n and \n" .$hexaNumber. "\n you get";
echo "</br>";
?>
