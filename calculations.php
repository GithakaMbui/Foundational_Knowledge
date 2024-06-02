<!--modulo operator converts both numbers to integers by stripping the decimal portion-->
<!--before processing and returns the remainder of a division, as follows:-->
<?php
$x = 5;
echo "</br>";
$y = 6;
echo "</br>";
echo (--$x * ++$y);
echo "</br>";
?>

<!--When they come after, the main calculation is carried out first, -->
<!--and then 1 is either added or subtracted, like this:-->
<?php
$x = 5;
$y = 6;
echo($x-- * $y++);
?>
