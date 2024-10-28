<!DOCTYPE html>
<html>
<body>
 
<?php
echo "My first PHP script! <br />";
echo "PHP version is " . phpversion() . '<br />';

$x = 5;
var_dump($x);

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);


// $x = 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";


$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15



?>

</body>
</html>