<?php

// Adding to an array
$fruits = array("Kiwi", "orange");
array_push($fruits, "Lemon", "banana");


var_dump($fruits);


// Adding to associative array
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];


// Deleting array items with array_splice

array_splice($cars, 1, 1);

?>