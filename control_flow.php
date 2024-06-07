<!--1. PHP Decision Making : Selection statements -->
<!--PHP allows us to perform actions based on some type of conditions that may be logical or comparative.-->
<!--Based on the result of these conditions i.e., either TRUE or FALSE-->

<!--There are four conditional statements:-->
<!--    a)if statement-->
<!--    b)if…else statement-->
<!--    c)if…elseif…else statement-->
<!--    d)switch statement-->


<!------------------------------------------------------------->
<!--2. PHP | Loops-->
<!--PHP supports four types of looping techniques;-->
<!--    i)for loop-->
<!--    ii)while loop-->
<!--    iii)do-while loop-->
<!--    iv)foreach loop-->

<!------------------------------------------------------------->

<!--1. Decision Making/Selection statements -->

<!--    a.) If Statement-->
<?php
$x = 12;

if ($x > 0) {
    echo "The number is positive";
    echo "</br>"; echo "</br>";
}
?>

<!--b) if…else Statement-->
<?php
$x = -12;

if ($x > 0) {
    echo "The number is positive";
    echo "</br>";
}

else{
    echo "The number is negative";
    echo "</br>";  echo "</br>";
}
?>

<!--example2-->
<?php
$num=12;
if($num%2==0){
    echo "$num is even number";
    echo "</br>";
}else{
    echo "$num is odd number";
    echo "</br>";  echo "</br>";
}
echo "</br>";  echo "</br>";
?>

<!--c) PHP If-else-if Statement-->
<?php
$marks=69;
if ($marks<33){
    echo "fail";
    echo "</br>";
}
else if ($marks>=34 && $marks<50) {
    echo "D grade";
    echo "</br>";
}
else if ($marks>=50 && $marks<65) {
    echo "C grade";
    echo "</br>";
}
else if ($marks>=65 && $marks<80) {
    echo "B grade";
    echo "</br>";
}
else if ($marks>=80 && $marks<90) {
    echo "A grade";
    echo "</br>";
}
else if ($marks>=90 && $marks<100) {
    echo "A+ grade";
    echo "</br>";
}
else {
    echo "Invalid input";
    echo "</br>";
}
echo "</br>";  echo "</br>";
?>

<!--d) PHP nested if Statement-->
<!--The nested if statement contains the if block inside another if block.-->
<!--The inner if statement executes only when specified condition in outer if statement is true.-->
<?php
$age = 23;
$nationality = "Indian";
//applying conditions on nationality and age
if ($nationality == "Indian")
{
    if ($age >= 18) {
        echo "Eligible to give vote";
    }
    else {
        echo "Not eligible to give vote";
    }
}
echo "</br>";  echo "</br>";
?>

<!--e) PHP Switch-->
<!--PHP switch statement is used to execute one statement -->
<!--from multiple conditions. It works like PHP if-else-if statement.-->
<?php
$num=20;
switch($num){
    case 10:
        echo("number is equals to 10");
        break;
    case 20:
        echo("number is equal to 20");
        break;
    case 30:
        echo("number is equal to 30");
        break;
    default:
        echo("number is not equal to 10, 20 or 30");
}
echo "</br>";  echo "</br>";
?>