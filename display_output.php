<?php
//turn on the display of errors for an individual script by adding the following code right at the top of the page:

ini_set('display_errors', '1');

?>

<?php
// using echo to print output in PHP
$name = 'David';

echo $name;

echo 5;

echo 'David';


// using print to print output in PHP

$name = 'James';

print $name;

print 10;

print 'James';

// Using the Short Echo Tag
 /*which consists of an opening angle bracket, a question mark, and the equal sign */
//<p>My name is <?= $name ?><!--.</p>-->

<p>My name is <?= $name ?>.</p>

<p> My name is <?php echo $name ?>. </p>


<!--Joining Strings Together-->
<?php
$firstName = 'David';
echo "</br>";
$lastName = 'Powers';
echo "</br>";
echo $firstName.$lastName;
echo "</br>";

echo $lastName . ' ' . $firstName;
echo "</br>";
?>








