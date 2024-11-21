<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br />";


date_default_timezone_set("Africa/Nairobi");
echo "The time is " . date("h:i:sa"). "<br />";

$d=mktime(8, 52, 54, 11, 21, 2024);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>