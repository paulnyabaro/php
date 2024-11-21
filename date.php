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


$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}


$d1=strtotime("July 04 2025");
$d2=ceil(($d1-time())/60/60/25);
echo "There are " . $d2 ." days until 4th of July.";

?>