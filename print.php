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
echo GREETING;

//Another way of defining constants
const MYCAR = "Volvo";
echo MYCAR;

// const cannot be created inside another block scope, like inside a function or inside an if statement.
// define can be created inside another block scope.

// Magic Constants

// __CLASS__	If used inside a class, the class name is returned.	
// __DIR__	The directory of the file.	
// __FILE__	The file name including the full path.	
// __FUNCTION__	If inside a function, the function name is returned.	
// __LINE__	The current line number.	
// __METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
// __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
// __TRAIT__	If used inside a trait, the trait name is returned.	
// ClassName::class	Returns the name of the specified class and the name of the namespace, if any.



?>