<?php

$str = "Visit w3schools";
$pattern = "/w3schools/i";

echo preg_match($pattern, $str);



// Using preg_match_all()
$str1 = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str1);

?>