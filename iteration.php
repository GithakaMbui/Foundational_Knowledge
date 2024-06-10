<!--Also called loops-->

<!--Loop in PHP is used to execute a statement or a block of statements,-->
<!--multiple times until and unless a specific condition is met.-->

<!--PHP supports four types of looping techniques;-->
<!---->
<!--1. for loop-->
<!--2. while loop-->
<!--3. do-while loop-->
<!--4. foreach loop-->

<!--1. For loop-->
<!-------------->
<!--This type of loops is used when the user knows in advance, how many times the block needs to execute. That is,-->
<!--the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops.-->

<!--Syntax:-->
<!----------->
<!---->
<!--for (initialization expression; test condition; update expression) {-->
<!--// code to be executed-->
<!--}-->

<!--Example-->
<!------------>

<?php

// code to illustrate for loop
for ($num = 1; $num <= 10; $num += 2) {
    echo "$num \n";
    echo "</br>";
}
echo "</br>"; echo "</br>";
?>

<!--Iterating over an array of numbers:-->
<!--example 2-->

<?php

$nums = [1, 10, 5, -9, -1];

for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i], "\n";
    echo "</br>";echo "</br>"; echo "</br>";
}
?>

<!--2. The For Each Loop -->

<!--        This loop is similar to the for loop but is used to loop over arrays.-->

<!--Two syntaxes:-->

<!--1) foreach ($array as $value) -->
<!--{ -->
<!--//code to be executed;-->
<!--} -->

<!--2) foreach ($array as $key=>$value) -->
<!--{ -->
<!--//code to be executed;-->
<!--} -->

<!--example 1:-->
<?php
$arr1 = array(11, 12, 13, 14, 15);
foreach($arr1 as $num)
{
    echo 'The number is '.$num.'<BR>';
}
echo "</br>";
echo "</br>";
?>

<!--example 2-->
<?php
$arr2 = array('Aaron'=>12, 'Ben'=>23, 'Carol'=>35);
foreach ($arr2 as $name=>$age) {
    echo $name . ' is ' . $age . ' years old.<BR>';
}
echo "</br>";
echo "</br>"; echo "</br>";
?>

<!--While Loop-->
<!--This loop performs a task repeatedly while a specific condition remains valid-->

<!--The syntax is as follows:-->
<!--while (condition is true) -->
<!--{ -->
<!--//do A -->
<!--} -->

<!--Example:-->
<?php
$d = 1;
while ($d < 5)
{
    echo 'The value of d is ' . $d . '<BR>';
    $d++;
}
?>