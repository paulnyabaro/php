<?php

// You can use Print

print('Hello World! <br>');
$x = "5985";
echo var_dump(is_numeric($x));


// casting to string
$age = 23;
$age = (string) $age;
var_dump($age);
echo(abs(-6.7));
echo(round(0.60));
echo(round(0.49));
echo(rand(15, 40));


// Constants
define("GREETING", "<br>Welcome to W3Schools.com!");
echo GREETING


?>