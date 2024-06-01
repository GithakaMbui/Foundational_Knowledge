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
echo "</br>";
?>

<!--3. Float data Type-->
<!--Is an number with a decimal point-->
<?php
$n1 = 19.34;
$n2 = 54.472;
$sum = $n1 + $n2;
echo "The rsult of te Addition of floating numbers: " .$sum;
echo "</br>";
?>

<!--4. Strings-->
<!--Is a non numeric data type-->
<?php
$company = "Tiket Technologies";
//both single and double quote statements will treat different
echo "Hello $company";
echo "</br>";
echo 'Hello $company';
echo "</br>";
echo "</br>";
?>

<!--5. Array-->
<!--It can store multiple values of the same data in a signle variable-->
<?php
$bikes = array ("Royal Enfield", "Yamaha", "KTM");
var_dump($bikes);   //the var_dump() function returns the datatype and values
echo "</br>";
echo "</br>";
echo "Array Element1 is: $bikes[0] </br>";
echo "Array Element2 is: $bikes[1] </br>";
echo "Array Element3 is: $bikes[2] </br>";
echo "</br>";
?>

<!--6. PHP Objects-->
<!--Objects are the instances of user-defined classes that can store both values and functions.-->
<!--They must be explicitly declared.-->
<?php
class bike {
    function model() {
        $model_name = "Royal Enfield";
        echo "Bike Model: " .$model_name;
    }
}
$obj = new bike();
$obj -> model();
?>

<!--7. NULL-->
<!--Null is a special data type that has only one value: NULL. -->
<!--There is a convention of writing it in capital letters as it is case sensitive.-->
<?php
$nl = NULL;
echo $nl;   //it will not give any output
?>

<!--8. Resource:
When PHP connects to an external data source,-->
<!--such as a file or database, -->
<!--it stores a reference to it as a resource.-->