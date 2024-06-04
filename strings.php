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
echo "</br>";
?>

<!--If we only want to convert a string's first character to lowercase or-->
<!--uppercase, we can use the lcfirst() or ucfirst() functions, respectively.-->

<?php

$str = 'hello';
$str2 = 'World';

echo ucfirst($str), ' ', lcfirst($str2);
echo "</br>";
echo "</br>";
?>

<!--trim()-->
<?php

$str = '----PHP----------------';
echo trim($str, '-');


echo "</br>";

$str = '08679Hello World!41238945';
echo trim($str, '0123456789');

echo "</br>";
echo "</br>";
?>

<!--Searching for substrings-->
<!--1. str_contains() — determines whether or not the substring is in the string.-->
<!--2. strpos() — finds the index of the substring inside the main string.-->
<!--3. stripos() — same as strpos() except for that it works case-insensitively.-->
<!--4. str_starts_with() — checks whether a string starts with a given substring.-->
<!--5. str_ends_with() — checks whether a string ends with a given substring.-->

<!--str_contains()-->
<?php

$str = 'JavaScript';

var_dump(str_contains($str, 'Java'));
echo "</br>";
var_dump(str_contains($str, 'JavaScript'));
echo "</br>";
var_dump(str_contains($str, 'script'));
echo "</br>";
echo "</br>";
?>

<!--strpos():-->
<?php

$str = 'PHP is amazing and is great.';

var_dump(strpos($str, 'is'));
echo "</br>";
var_dump(strpos($str, 'amazing'));
echo "</br>";
var_dump(strpos($str, 'eat'));
echo "</br>";
var_dump(strpos($str, 'php'));
echo "</br>"; echo "</br>";
?>

<!--str_starts_with().-->
<?php

$lang = 'JavaScript';

var_dump(str_starts_with($lang, 'Java'));
echo "</br>"; echo "</br>";
?>

<!--str_ends_with():-->
<?php

$lang = 'JavaScript';

var_dump(str_ends_with($lang, 'Script'));
echo "</br>"; echo "</br>";

?>

<!--Slicing a string-->
<!--Slicing a string refers to extracting at a substring-->
<!--from a string, starting and ending at given positions-->

<!--substr()-->
<?php

$lang = 'Hello World!';

echo substr($lang, 1), "\n";
echo "</br>";
echo substr($lang, 6), "\n";
echo "</br>";
echo substr($lang, 6, 2), "\n";
echo "</br>";
echo substr($lang, 6, 1);

echo "</br>"; echo "</br>";

?>

<?php

$lang = 'Hello World!';

echo substr($lang, 1, -1), "\n";
echo "</br>";
echo substr($lang, 0, -3), "\n";
echo "</br>";
echo substr($lang, 6, -1);

echo "</br>"; echo "</br>";
?>

<!--Counting substrings-->
<!--substr_count()-->
<?php

$str = 'This is it and it is to admit.';

echo substr_count($str, 'it');
echo "</br>"; echo "</br>";
?>

<!--Splitting strings-->
<!--str_split() — splits a string into given lengths of substrings.-->
<!--explode() — splits a string at given delimiters.-->

<!--str_split()-->
<!--SYNTAX: str_split($string, $max_length = 1)-->


<!--//we split the string $code into an array of characters and-->
<!--//then convert each character into a number, before processing the number by adding 1 to it:-->
<?php
$code = '16489';
$code_arr = str_split($code);
echo $code_arr;

//for ($i = 0; $i < count($code_arr); $i++) {
//    // Convert the character to an integer, and then add 1 to it.
//    $code_arr = ((int) $code_arr[$i]) + 1;
//
//    echo $code_arr[$i];
//
//    echo "</br>"; echo "</br>";
//}
echo "</br>"; echo "</br>"; echo "</br>"; echo "</br>";
?>

<!--explode(): used to break apart a string into an array of substrings:-->
<?php

$fruits = 'oranges,bananas,apples,kiwis,melons';

print_r(explode(',', $fruits));
echo "</br>"; echo "</br>";
?>

<!--Replacing substrings in strings-->
<!--str_replace():-->

<?php

$str = 'JavaScript was first released in 1995. JavaScript is amazing.';

echo str_replace('JavaScript', 'Java', $str);
echo "</br>"; echo "</br>";
?>

<?php

$str = 'JavaScript was first released in 1995. JavaScript is amazing.';

$count = 0;
echo str_replace('JavaScript', 'Java', $str, $count), "\n";
echo "</br>";
echo $count;

echo "</br>"; echo "</br>";
?>

<!--where $search and $replace are both arrays.-->
<?php

$str = 'JavaScript was first released in 1995. JavaScript is amazing.';

echo str_replace(['JavaScript', '1995'], ['Python', '1991'], $str);
echo "</br>"; echo "</br>";
?>

<!--we replace the names 'Java', 'Python' and 'C' with the word 'PHP':-->
<?php

$str = 'Java is good. Python is also good. C is great.';

echo str_replace(['Java', 'Python', 'C'], 'PHP', $str);
echo "</br>";
?>
