<!--Example 1-->
<!--------------->
<?php
function displayGreetings(){ // here we declare a function called displayGreetings() that has no parameters (
    echo 'Hello';
    echo "</br>";
}
displayGreetings();  //To call the function, we use its name followed by a pair of parentheses:
echo "</br>";  echo "</br>";
?>

<!--//Example 2-->
<!----------------->
<?php
function displayGreetings2($name, $message){
    echo "Hello $name, $message";
    echo "</br>";
}
displayGreetings2('Jamie', 'good morning');
echo "</br>";  echo "</br>";
?>


<!--//Example 3-->
<!----------------->
<!--//We can provide default values for parameter(s) when we declare our functions.-->
<!--//When we declare functions with default values for parameters,-->
<!--//note that parameters with default values must come after parameters without default values-->

<?php
function displayGreetings3($name, $message = 'have a good day')
{
    echo "Hello $name, $message";
    echo "</br>";
}
displayGreetings3('Jamie');
echo '<BR>';
displayGreetings3('Jamie', 'how are you?');
echo "</br>";  echo "</br>";
?>

<!--Example 4-->
<!---------------->
<!--//functions can return a result after they complete their tasks.-->
<?php
function addNumbers($num1, $num2, $num3)
{
    return $num1 + $num2 + $num3;
    echo 'Hello';
    echo "</br>";
    echo "</br>";
}
echo addNumbers(9, 6, 1);
//We can assign the result returned by the
//function to a variable or use the echo statement to display the result directly
echo "</br>";  echo "</br>";
?>

<!--Type declarations-->
<!--___________________-->
<?php
function doubleIt(int $number) {
    return $number *= 2;
}
$doubled_number = doubleIT(15);
echo $doubled_number;
echo "</br>"; echo "</br>";
?>