<?php

// Adding to an array
$fruits = array("Kiwi", "orange");
array_push($fruits, "Lemon", "banana");


var_dump($fruits);


// Adding to associative array
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];


// Deleting array items with array_splice

array_splice($cars, 1, 2);

// First if the starting index then the number of items to be deleted

// unset() can also be used

unset($cars[0], $cars[1]);


?>