<!--Strings are the name that programmers have given to sequences of text held within the variables of our applications-->
<?php
// String with single quotes.
 $panda = 'Pandas rule!';

// String with double quotes.
 $panda = "Pandas rule!";

echo $panda;
echo "</br>";echo "</br>";

?>

<!--String values that are enclosed in double quotes are a little smarter. They have a trick -->
<!--that their single-quoted brethren just aren’t able to do.It’s-->
<!--called String interpolation. -->
<?php
// Set a string.
$value = 'pandas';

// Single quotes.
$first = 'We love $value!';

// Double quotes.
$second = "We love $value!";

// Output.
 var_dump($first);
 echo "</br>";
 var_dump($second);
echo "</br>";
echo "</br>";

 ?>


<!--// It’s best to wrap interpolated values within{curly braces}.It makes the interpolation much cleaner-->
<?php
// Set a string.
 $value = 'Ugali';

 // Insert value.
 $result = "We love {$value}!";

 // Output
var_dump($result);
echo "</br>";
echo "</br>";
?>

<!--Concatenation-->
<!--is the process of joining two strings end to end-->

<?php
// First value.
 $first = 'Value of: ';

 // Second value.
$second = 27.325;

// Concatenate.
var_dump($first . $second);
echo "</br>";
echo "</br>";
?>

<!--2. STRING FUNCTIONS-->

<!--a) Lower and upper casing-->
<!--i) strtolower() function. -->
<!-- => It takes in the string as an argument and then returns back a new string, in all lowercase characters.-->

<?php

$str = 'JavaScript';
echo strtolower($str);
echo "</br>";
?>

<!--ii) strtoupper() is used to convert a string to all uppercase characters.-->

<?php

$str = 'JavaScript';
echo strtoupper($str);
echo "</br>";
?>
