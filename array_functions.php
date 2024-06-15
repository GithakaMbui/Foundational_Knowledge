<!--Commonly used Array Functions in PHP-->

<!--1. count() - the count() function. -->

<!--This function accepts an array and returns the number of elements in the array. -->

<!--Example:-->
<?php
$countDemo = array(1, 4, 5, 1, 2);
echo count($countDemo);
echo "</br>"; echo "</br>";
?>

<!--2. array_search()m function-->

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