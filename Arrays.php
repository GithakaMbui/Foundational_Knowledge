<!--An array is a special data type that allows us to store related values together as a single variable-->

<!--1.1 Creating an Array-->
<!-- i) use the array() function-->

<?php
$firstArr = array();
 // create empty array
?>

<!--Example 2-->
<!--a) indexed array-->
<?php
$secondArr = array(11, 16, 4, 9, 12);
//This creates an array with 5 elements
echo $secondArr[3];  //To access the individual elements in the array, we use its index and a pair of square brackets.
echo "</br>";


$secondArr[3] = 20 ; //To update the value of an element.
echo $secondArr[3];
echo "</br>"; echo "</br>";
?>

<!--//arrays can be used to store other data types.-->
<?php
$fruitsArr = array('Apple', 'Banana', 'Coconut');
echo $fruitsArr[0];
echo "</br>";
?>

<!--b) Associative arrays-->
<!--An associative array is one where each value in the array is associated with a key.-->
<?php
$assocArr = array(
'Peter' => 11,
'Jane' => 16,
'Paul' => 12
);
//To access the values in an associative array, we use its key
echo $assocArr['Paul'];
echo "</br>"; echo "</br>";
?>

<!--c) multidimensional array-->
<!--Arrays can be used to store arrays. This is known as a multidimensional array. -->
<?php
$simpleMDArr = array(
    array(1, 2, 1, 4, 5),
    array(0, 5, 1, 3, 4),
    array(4, 1, 7, 8, 9)
);

//If you want to access the elements in the “inner” arrays, you use two pairs of square brackets
echo $simpleMDArr[2][3];
echo "</br>"; echo "</br>";
?>

<!--Associative arrays can also be used to store arrays-->
<?php
$assocMDArr = array(                     //$assocMDArr is an associative array used to store three indexed arrays.
"first array" => array(1, 2, 6, 1, 3),
"second array" => array(3, 5, 1, 8, 9),
"third array" => array(1, 0, 9, 4, 7) );

//To access the value x
echo $assocMDArr["first array"][2];
echo "</br>"; echo "</br>";
?>

<!--We can use an associative array to store associative arrays.-->
<?php
$anotherAssocMDArr = array(
"first player" => array("name" => 'John', "age" => 25),
"second player" => array("name" => 'Tim', "age" => 35)
);
echo $anotherAssocMDArr["first player"]["age"];
echo "</br>"; echo "</br>";
?>