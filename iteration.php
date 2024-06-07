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
    echo "</br>";
}
