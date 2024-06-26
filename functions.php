
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

<!--Example 2-->

<?php
//declare(strict_types=1);  // This should be the first statement in the script
function addTwoNums($a, $b): int {
return $a + $b;
}

echo '<BR>'.addTwoNums(3, 1);

echo '<BR>'.addTwoNums(3.9, 1);
echo "</br>"; echo "</br>";
?>

<!--Example 3-->
 <?php
  // Say hello to an array of people.
function sayHello(array $names) {
    foreach ($names as $name) {
        echo "Hello, {$name}! </br>";
    }
}
sayHello(['Katie', 'Corissa', 'Lucy']);
 echo "</br>"; echo "</br>";
?>


<!--Infiniteparameters.-->

<?php
function welcome() {
    // Get all function parameters.
 $names = func_get_args();  //When we use func_get_args() we receive any parameters that are given
                            // to the function in the form of an indexed array.

    foreach ($names as $name) {     // Iterate the names and welcome them.
    echo "Welcome, {$name}! </br>";
    }
}

welcome('Dayle', 'James', 'Andrea', 'Ben', 'Mateusz');

?>

<!------------------------------------------------------------------------------------------------------------->
<!--CLOSURES-->
<!--Closures are special functions.They are called anonymous function.These types of functions don’t have a name.-->
<!------------------------------------------------------------------------------------------------------------->
<!--Example-->
<?php
$cat = function ()
{
    echo 'Oh long Johnson!';
};           //  Note that we have a semi;colon appended to our function
$cat();
echo "</br>"; echo "</br>";

?>

<!--Passing functions to functions-->

                <!--Example:Passing Closures to functions.-->

<?php
// Create a math function.
 function math(Closure $type, $first, $second) {   // It receives a type-hinted Closure, and two other variables as parameters

// Execute the closure with parameters
 return $type($first, $second);
 }

 // Create an addition closure.
$addition = function ($first, $second) {
return $first + $second;             //Add the values.
 };

 //Create a subtraction closure.
$subtraction = function($first,$second){
//Subtract the values
    return $first - $second;
};

//Execute math function.
echo math($addition,20,25);
echo "</br>";
echo math($subtraction,50,30);

?>