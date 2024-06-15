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

<!--Displaying the Content of Arrays -->

<!--a) Use the var_dump() function -->
<?php
$myArray = array(2, 5.1, 'PHP', 105);
echo '<pre>';
var_dump($myArray);
echo '<pre>';
?>

<!--b) Use the print_r() function-->
<?php
$myArray = array(2, 5.1, 'PHP', 105);
echo '<pre>';
print_r($myArray);   //  its output is more concise as it does not give us the data type of each element.
echo '<pre>';
?>

-------------------------------------------------------------------
<!--Array Operations-->
--------------------------------------------------------------------
<!--1. Adding Elements to Arrays -->

<!--i) use the square bracket notation-->
<?php
$addDemo = array(1, 5, 3, 9);
$addDemo[] = 7;
echo '<pre>';
print_r($addDemo);
echo '<pre>';
?>

<!--Example 2 -->
<?php
$addDemoAssoc = array('Peter'=>20, 'Jane'=>15);
$addDemoAssoc['James'] = 17;

echo count($addDemoAssoc);

echo '<pre>';
print_r($addDemoAssoc);
echo '<pre>';
?>

<!--ii) Using the array_push() function-->
<?php
$programmingLanguages = ['PHP', 'Java', 'Kotlin'];
array_push($programmingLanguages, 'SQL', 'GO');

echo count($programmingLanguages);

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';
?>

<!--2. Deleting Elements from Arrays -->

<!--a) Using array_pop() function-->
<?php
$someRandomNumbers = [10,20,30, 40,50, 60];
array_pop($someRandomNumbers);   //This removes the last element from the array

echo count($someRandomNumbers);

echo '<pre>';
print_r($someRandomNumbers);
echo '<pre>';
?>

<!--b) Using array_shift() function-->
<?php
$someRandomLetters = ['a', 'b', 'c', 'd', 'e', 'f'];
array_shift($someRandomLetters); // This removes the first element from the array
                                        //Note: The array gets re-indexed when you use array_shuft
echo count($someRandomLetters);

echo '<pre>';
print_r($someRandomLetters);
echo '<pre>';
?>

<!--c) use the array_splice() function. -->
<?php
$colors = array("red", "black", "pink", "white", "green");
array_splice($colors, 2, 2); //we need to pass two arguments to it: -
                                                // the array to remove elements from and the
                                                // position to start removing them.
                                                // We can also pass a third argument to specify the number
                                                // of elements to remove.
echo '<pre>';
print_r($colors);
echo '<pre>';
?>