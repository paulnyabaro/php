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

// Removing an item from an associative array: unset and array_diff
unset($cars["model"]);

// array_diff function
$newarray = array_diff($cars, ["Mustang", 1964]);

// Note: The array_diff() function takes values as parameters, and not keys.

// Removing the last item in an array: array_pop

array_pop($newarray)


?>