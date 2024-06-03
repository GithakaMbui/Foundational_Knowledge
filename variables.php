<?php
//A variable is a name that you give to something that may change or that you dont know in advance
$PI	=	3.14159;
$radius	=	10;
echo "The PI is " .$PI;
echo "</br>";
echo "The radius is " .$radius;
echo "</br>";
echo "</br>";

?>

<!--Indirect Reference-->
<?php
$car = "BMW";
$$car= "Z4";
echo $$car;
echo "</br>";
echo "</br>";
?>

<!--How	to	Manage	Variables-->
<!--1. isset()-->
<!--    This	construct	checks	whether	PHP	has	declared	a	particular	variable.	-->
<!--    It will	give	you	“true”	(i.e.	a	Boolean	value)	if	your	chosen	variable -->
<!--    already	exists; otherwise,	it	will	give	you	false-->

<?php
$my_name = "Mbui";
if(isset($my_name))
{
    echo " $my_name exists";
}
echo "</br>";
?>

<!--2. unset()-->
<!--.	Invoking	isset()	on	a	variable	that	you’ve	deleted	gives	you	“false.”-->
<?php
$gameconsole = "Playstation4";
unset($gameconsole); 
if(isset($gameconsole))
{
  echo " $gameconsole exists";
}
?>

<!--3. empty()-->
<!--    With	this	construct,	you	can	check	whether	a	variable	exists	or	is	set	to false.	-->
<!--    While	checking	the	truth	value	of	a	variable,	empty()	will	-->
<!--    convert	the	data into	Boolean	and	checks	whether	it	is	true	or	false-->
<?php
//$gameConsole = "Ps4";

if(empty($gameConsole))
{
    echo " This variable does not have a value";
}
echo "</br>";
echo "</br>";
?>

<!--Variable concatenation-->
<?php
$greeting = "Hello";
$name = "Mbui";
$message = $greeting . ", " . $name . "!";
echo $message;
echo "</br>";
?>

<!--:Multiple assignment-->
<?php
$firstPanda = $secondPanda = $thirdPanda = 1337;
echo $firstPanda;
echo "</br>";
echo($secondPanda);
echo "</br>";
echo "</br>";
?>

<!--camelCasedvariablenames-->
<?php
$earthWormJim = 1;
$powerRangers = 11;
$spongeBobSquarePants = 111;
echo "".$powerRangers. "</br>";
echo "".$earthWormJim. "</br>";
echo $spongeBobSquarePants;


