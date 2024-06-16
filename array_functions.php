<!--Commonly used Array Functions in PHP-->

<!--1. count() - the count() function. -->

<!--This function accepts an array and returns the number of elements in the array. -->

<!--Example:-->
<?php
$countDemo = array(1, 4, 5, 1, 2);
echo count($countDemo);
echo "</br>"; echo "</br>";
?>

<!--2. array_search() function-->

<!--This function searches for a particular value in an array. -->
<!--If the value is found, the function returns its corresponding index or key. Else, it returns false-->
<?php
$indexArrDemo = array(11, 4, 5, 1, 2, 5, 6);
$assocArrDemo = array('A'=>12, 'B'=>5, 'C'=>20);
echo array_search(5, $indexArrDemo).'<BR>';
echo array_search(20, $assocArrDemo).'<BR>';
var_dump(array_search('B', $assocArrDemo));
echo "</br>";echo "</br>";
?>

<!--3. in_array() -->

<!--The in_array() function is similar to the array_search() function. However,-->
<!--instead of returning the key or index, -->
<!--it returns true if the stated value is found in the array. Else, it returns false. -->
<?php
$indexArrDemo = array(11, 4, 5, 1, 2, 5, 6);
$assocArrDemo = array('A'=>12, 'B'=>5, 'C'=>20);

var_dump(in_array(5, $indexArrDemo));
echo "</br>";
var_dump(in_array(20, $assocArrDemo));
echo "</br>";
var_dump(in_array('B', $assocArrDemo));
echo "</br>"; echo "</br>";
?>

<!--3. array_merge() -->
<!--This function merges two or more arrays -->
<!--and returns the merged array. -->
<?php
$num1 = array(100, 111, 120);
$num2 = array(100, 3, 5);
$num3 = array(1, 10);

$num3 = array(1, 10);
$newArray1 = array_merge($num1, $num2, $num3);
echo '<pre>';
print_r($newArray1);
echo '<pre>';
?>

<!--4. array_splice() function-->

<!--Example 1:-->
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

<!--Example 2-->
<?php


$nums = [1, 50, -6, -20, 22];
$removed_nums = array_splice($nums, 1, 1);

echo "\$nums:\n";
print_r($nums);

echo "\n\$removed_nums:\n";

echo '<pre>';
print_r($removed_nums);
echo '<pre>';
?>

<!--5. array_diff() function-->
<!--used to compare the differences between two or more arrays and return the differences that exist
 in the first array but are not present in the other Value that does not exist in the array.-->
<!--This function takes two or more arrays as arguments and returns a new array containing different values-->

<?php
$array1 = array("a" => "red", "b" => "green", "c" => "blue");
$array2 = array("a" => "red", "b" => "yellow", "c" => "green");

$result = array_diff($array1, $array2);

echo '<pre>';
print_r($result);
echo '<pre>';
?>

<!--PHP array_intersect() Function-->
<!--used to find the common values between two or more arrays. It compares the values of the arrays and-->
<!--returns an array containing only the values that are present in all arrays.-->
<?php
$array1 = array('apple', 'banana', 'orange', 'grape');
$array2 = array('banana', 'orange', 'kiwi', 'pear');
$intersection = array_intersect($array1, $array2);
print_r($intersection);

?>

<!--PHP sort() function-->
<!--built-in function that is used to sort an array in ascending order-->
<?php
$fruits = array("apple", "banana", "orange", "mango", "kiwi");
sort($fruits);

foreach ($fruits as $fruit) {
echo $fruit. "<br>";
}
?>

<!--PHP array_reverse() Function-->
<!--reverse the order of elements in an array. It takes an array as an argument and returns -->
<!--a new array with the elements in reverse order.-->
<?php
$original_array = array('apple', 'banana', 'cherry', 'date');
$reversed_array = array_reverse($original_array);

print_r($reversed_array);
?>

<!--array_values()-->
<!--It takes in an associative array and returns all the values in a numerically indexed array.-->
<!--It accepts one argument, the array.-->
<?php
$smartphones = [
"Samsung" => "Galaxy S21",
"Apple" => "iPhone 12",
"Google" => "Pixel 5"
];

$smartphone_models = array_values($smartphones);

print_r($smartphone_models);
// This will output ['Galaxy S21', 'iPhone 12', 'Pixel 5']
?>

<!--array_slice()-->
<!--It extracts a portion of the array.-->
<!--It literally takes out a slice of the array, like taking out a slice of bread.-->


<?php
$sports = ['Basketball', 'Football', 'Baseball', 'Soccer', 'Tennis', 'Swimming'];

$middle_sports = array_slice($sports, 2, 2, true); //takes in four arguments:
//  A required input array.
//starting point of the extraction
//starting point of the extraction
//An Optional boolean value that determines whether to preserve the keys of the input array or not

print_r($middle_sports);
?>


<!--array_reduce()-->
<!--It applies a user-defined function iteratively on the item's value, that is,-->
<!--it takes a user-defined function and passes all values in the array-->
<!--through the function one after the other and reduces the array items to a single value-->

<!--It takes in three arguments:-->
<!---->
<!--A required input array-->
<!--A required user-defined function-->
<!--An optional initial value where the string catenation or the number arithmetic begins with-->

<!--Example: Add an array of numbers-->
<?php
$numbers = [1, 2, 3, 4, 5];
function add_numbers($a, $b) {
return $a + $b;
}

$sum = array_reduce($numbers, 'add_numbers', 0); //all the numbers in array will pass through function

echo $sum; // Outputs: 15
?>

<!--array_filter()-->
<!--filters the elements of an array based on a callback function and returns a new array with the filtered values.-->
<!--example that filters out the odd numbers from an array-->
<?php
$numbers = array(1, 2, 3, 4, 5);

$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

print_r($evenNumbers); // Output: Array ( [1] => 2 [3] => 4 )
?>

<!--or implemented another way-->
<?php
$numbers = array(6, 7, 8, 9, 20);

function removeOdd($num) {
    return $num % 2 == 0;
}

$evenNumbers = array_filter($numbers, 'removeOdd');

print_r($evenNumbers);
?>


<!--PHP array_sum() Function-->
<!--returns the sum of all the values in an array(one dimensional and associative). -->
<!--It takes an array parameter and returns the sum of all the values in it.-->
<?php
//array whose sum is to be calculated
$a = array(12, 24, 36, 48);

//calculating sum
print_r(array_sum($a));
?>

<!--PHP array_unique() Function-->
<!--removes duplicates-->
<!--returns the filtered array after removing all duplicates from the array.-->
<?php

// Input Array
$a=array("red", "green", "red", "blue");

// Array after removing duplicates
print_r(array_unique($a));

?>
