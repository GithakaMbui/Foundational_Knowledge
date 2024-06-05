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
    echo "</br>";
?>