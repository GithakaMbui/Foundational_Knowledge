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
echo "</br>"; echo "</br>";
?>

<!--Do-while Loop -->
<!--This loop is very similar to the while loop except that the test condition is placed at the end of the loop.-->
<!--This means that the code within the curly braces of the loop will always be executed at least once. -->

<!--The syntax of a do-while loop is:-->
    <!--do {-->
    <!--//some tasks -->
    <!--}-->
    <!--while (condition is true); -->

<!--NB: a semicolon (;) is required after the test condition-->
<!--Example-->
<?php
$e = 100;
do {
echo 'The value is '.$e;
$e++;
} while($e<0);
echo "</br>"; echo "</br>";
?>

<!--Switch Statement -->
<!--It is typically used when the condition involves comparing a variable against -->
<!--a single value (instead of a range of values). -->

<!--syntax:-->
<!--switch (variable used for switching)-->
<!--{ case firstCase:-->
<!--Task A;-->
<!--break;-->
<!---->
<!--case secondCase:-->
<!--Task B;-->
<!--break;-->
<!--...-->
<!--default: Default task;-->
<!--}-->

<!--example-->
<?php
$b = 10;
switch ($b)
{

case 10:
echo 'Chocolate<BR>';
break;

case 20:
echo 'Lemon<BR>';

case 25:
echo 'Strawberry<BR>';
break;

default:
echo 'None of the above<BR>';
}
echo "</br>"; echo "</br>";
?>

<!--Break, Continue-->
<!--A break statement ends the execution of the loop it is in-->
<?php
for ($i = 0; $i < 50; ++$i)
{ echo "$i<BR>";
    if ($i == 4) break;
    echo "</br>";
}
echo "</br>";  echo "</br>";
?>

<!--continue statement-->
<!--it causes the rest of the loop to be skipped for that particular iteration.-->
<?php
for ($i = 0; $i < 6; ++$i)
{ echo '$i = '.$i.', ';
    if ($i == 4)
        continue;
    echo 'First.';
    echo 'Second.<BR>';
}
echo "</br>";  echo "</br>";
?>