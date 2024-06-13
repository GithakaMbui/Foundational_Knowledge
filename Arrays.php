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
