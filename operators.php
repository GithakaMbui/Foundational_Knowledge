<!--PHP Operator is a symbol i.e used to perform operations on operands. -->
<!--In simple words, operators are used to perform operations on variables or values.-->

<!--Arithmetic operators in PHP-->
<!---->
<!--Operation      Operator     Example       Result-->
<!--_________________________________________________-->
<!--Addition        +           $x + 10        30-->
<!--Subtraction     -           $x - 10        10-->
<!--Multiplication  *           $x * 10        200-->
<!--Division        /           $x / 10         2-->
<!--Modulo          %           $x % 3          2 -->
<!--Increment   (add 1) ++      $x++ 21 -->
<!--Decrement (subtract 1) --   $x-- 19 -->
<!--Exponentiation **           $x**3          8000-->

<!--Example: This example explains the arithmetic operator in PHP.-->

<?php
// Define two numbers
$x = 10;
$y = 3;

// Addition
echo "Addition: " . ($x + $y) . "\n";
echo "</br>";

// Subtraction
echo "Subtraction: " . ($x - $y) . "\n";
echo "</br>";

// Multiplication
echo "Multiplication: " . ($x * $y) . "\n";
echo "</br>";

// Division
echo "Division: " . ($x / $y) . "\n";
echo "</br>";

// Exponentiation
echo "Exponentiation: " . ($x ** $y) . "\n";
echo "</br>";

// Modulus
echo "Modulus: " . ($x % $y) . "\n";
echo "</br>"; echo "</br>";
?>

<!--2. Logical or Relational Operators:-->
<!---->
<!--Operator          Name                  Syntax               Operation-->
<!--and	              Logical AND	        $x and $y	           True if both the operands are true else false-->
<!--or	              Logical OR	        $x or $y	           True if either of the operands is true else false-->
<!--xor	Logical XOR	$x xor $y	True if either of the operands is true and false if both are true-->
<!--&&	Logical AND	$x && $y	True if both the operands are true else false-->
<!--||	Logical OR	$x || $y	True if either of the operands is true else false-->
<!--!	Logical NOT	!$x	True if $x is false-->
<!---->
<!--Example: This example describes the logical & relational operator in PHP.-->

<?php
$x = 50;
$y = 30;
if ($x == 50 and $y == 30)
    echo "and Success \n";
    echo "</br>";

if ($x == 50 or $y == 20)
    echo "or Success \n";
    echo "</br>";

if ($x == 50 xor $y == 20)
    echo "xor Success \n";
    echo "</br>";

if ($x == 50 && $y == 30)
    echo "&& Success \n";
    echo "</br>";

if ($x == 50 || $y == 20)
    echo "|| Success \n";
    echo "</br>";

if (!$z)
    echo "! Success \n";
    echo "</br>";   echo "</br>";   echo "</br>";

?>

<!--Comparison Operators: -->
<!--These operators are used to compare two elements and outputs the result in boolean form. -->
<!--Here are the comparison operators along with their syntax and operations in PHP.-->

<!--Operator	           Name	                  Syntax	                  Operation-->
<!------------------------------------------------------------------------------------------------------------------->
<!--==                     Equal To        	      $x == $y	                  Returns True if both the operands are equal-->
<!--!=             	       Not Equal To	          $x != $y	                  Returns True if both the operands are not equal-->
<!--<>        	           Not Equal To	          $x <> $y	                  Returns True if both the operands are unequal-->
<!--===	                   Identical	          $x === $y	                  Returns True if both the operands are equal and are of the same type-->
<!--!==	                   Not Identical	      $x == $y	                  Returns True if both the operands are unequal and are of different types-->
<!--<	                   Less Than	          $x < $y	                  Returns True if $x is less than $y-->
<!-- >	                   Greater Than	          $x > $y	                  Returns True if $x is greater than $y-->
<!--<=	                   Less Than or Equal To $x <= $y	                  Returns True if $x is less than or equal to $y-->
<!-- >=	                   Greater Than or Equal To	$x >= $y	              Returns True if $x is greater than or equal to $y-->

<?php
$a = 80;
$b = 50;
$c = "80";

//var_dump($a == $c) + "\n";
var_dump($a == $c );
echo "</br>";
var_dump($a != $b);
echo "</br>";
var_dump($a <> $b);
echo "</br>";
var_dump($a === $c);
echo "</br>";
var_dump($a !== $c) ;
echo "</br>";
var_dump($a < $b) ;
echo "</br>";
var_dump($a > $b) ;
echo "</br>";
var_dump($a <= $b);
echo "</br>";
var_dump($a >= $b);
echo "</br>";   echo "</br>";

?>

<!--Conditional or Ternary Operators:-->
<!--used to compare two values and take either of the results simultaneously,-->
<!--depending on whether the outcome is TRUE or FALSE. -->

<!--Syntax:-->
<!--$var = (condition)? value1 : value2;-->
<?php
$x = -12;
echo ($x > 0) ? 'The number is positive' : 'The number is negative';
echo "</br>"; echo "</br>";
?>

<!--Assignment Operators:-->
<!--Operator           Name                 Syntax           Operation-->
<!-- =                 Assign               $x = $y          Operand on the left obtains the value of the operand on the right-->
<!--+=                Add then Assign       $x += $y         Simple Addition same as $x = $x + $y-->
<!---=                Subtract then Assign  $x -= $y         Simple subtraction same as $x = $x – $y-->
<!--*=                Multiply then Assign  $x *= $y         Simple product same as $x = $x * $y-->
<!--/=                Divide then Assign (quotient)$x /= $y  Simple division same as $x = $x / $y-->
<!--%=                Divide then Assign (remainder)$x %= $y Simple division same as $x = $x % $y-->


<?php
// Simple assign operator
$y = 75;
echo $y, "\n";
echo "</br>";

// Add then assign operator
$y = 100;
$y += 200;
echo $y, "\n";
echo "</br>";

// Subtract then assign operator
$y = 70;
$y -= 10;
echo $y, "\n";
echo "</br>";

// Multiply then assign operator
$y = 30;
$y *= 20;
echo $y, "\n";
echo "</br>";

// Divide then assign(quotient) operator
$y = 100;
$y /= 5;
echo $y, "\n";
echo "</br>";

// Divide then assign(remainder) operator
$y = 50;
$y %= 5;
echo $y;
echo "</br>"; echo "</br>";
?>

<!--Array Operators:-->
<!--Operator         Name          Syntax                      Operation-->
<!--+                Union         $x + $y                     Union of both i.e., $x and $y-->
<!--==               Equality      $x == $y                    Returns true if both has same key-value pair-->
<!--!=               Inequality    $x != $y                     Returns True if both are unequal-->
<!--===              Identity      $x === $y                    Returns True if both have the same key-value pair in the same order and of the same type-->
<!--!==             Non-Identity   $x !== $y                    Returns True if both are not identical to each other-->
<!--<>              Inequality     $x <> $y                     Returns True if both are unequal-->

<?php
$x = array("k" => "Car", "l" => "Bike");
$y = array("a" => "Train", "b" => "Plane");

var_dump($x + $y);
echo "</br>";
echo "</br>";

var_dump($x == $y);
echo "</br>";

var_dump($x != $y) ;
echo "</br>";

var_dump($x <> $y);
echo "</br>";

var_dump($x === $y);
echo "</br>";

var_dump($x !== $y);
echo "</br>"; echo "</br>";
?>

<!--Increment/Decrement Operators-->
<!--Operator         Name             Syntax                     Operation-->
<!--++	             Pre-Increment	  ++$x	                     First increments $x by one, then return $x-->
<!--—	             Pre-Decrement	  –$x	                     First decrements $x by one, then return $x-->
<!--++	             Post-Increment	  $x++	                     First returns $x, then increment it by one-->
<!--—	             Post-Decrement	  $x–	                     First returns $x, then decrement it by one-->

<?php
$x = 2;
echo ++$x, " First increments then prints \n";
echo $x, "\n";
echo "</br>";

$x = 2;
echo $x++, " First prints then increments \n";
echo $x, "\n";
echo "</br>";

$x = 2;
echo --$x, " First decrements then prints \n";
echo $x, "\n";
echo "</br>";

$x = 2;
echo $x--, " First prints then decrements \n";
echo $x;
echo "</br>"; echo "</br>";
?>

<!--Spaceship Operators:-->
<!---->
<!--The spaceship operator or combined comparison operator is denoted by “<=>“. -->
<!--These operators are used to compare values but instead of returning the boolean results,-->
<!--it returns integer values. If both the operands are equal, it returns 0. If the right operand is greater, -->
<!--it returns -1. If the left operand is greater, it returns 1. -->

<!--Operator           Syntax              Operation-->
<!--$x < $y	           $x <=> $y	       Identical to -1 (right is greater)-->
<!--$x > $y         	$x <=> $y	       Identical to 1 (left is greater)-->
<!--$x <= $y	       $x <=> $y	       Identical to -1 (right is greater) or identical to 0 (if both are equal)-->
<!--$x >= $y	       $x <=> $y	       Identical to 1 (if left is greater) or identical to 0 (if both are equal)-->
<!--$x == $y	       $x <=> $y	        Identical to 0 (both are equal)-->
<!--$x != $y	       $x <=> $y	       Not Identical to 0-->

<?php
$x = 50;
$y = 50;
$z = 25;

echo $x <=> $y;
echo "\n";
echo "</br>";

echo $x <=> $z;
echo "\n";
echo "</br>";

echo $z <=> $y;
echo "\n";
echo "</br>";

// We can do the same for Strings
$x = "Ram";
$y = "Krishna";

echo $x <=> $y;
echo "</br>";


echo $x <=> $y;
echo "\n";
echo "</br>";

echo $y <=> $x;
echo "</br>";echo "</br>";
?>