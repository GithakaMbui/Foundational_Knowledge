<!--Checking the Data Type of a Variable.-->
<!--Use the function var_dump()-->
<!--var_dump($variable_to_test);-->

<?php
//Explicitly Changing a Variable’s Data Type
//Example
$input = 'coffee';
$drinks = (array) $input;
var_dump($input);
echo "</br>";
echo "</br>";
var_dump($drinks);
?>
