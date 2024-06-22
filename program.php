<?php
//This program is used to demonstrate the use of Include

include'welcome.php';


// USE OF REQUIRE
//require 'greetings.php';

require_once 'greetings.php';

echo welcome('Tamas');

echo "</br>"; echo "</br>";

echo greetings('Musakuru');

?>
