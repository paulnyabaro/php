<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br />";


date_default_timezone_set("Africa/Nairobi");
echo "The time is " . date("h:i:sa"). "<br />";

$d=mktime(8, 52, 54, 11, 21, 2024);
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br />";


// Using strtotime() to create time
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br />";


$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>