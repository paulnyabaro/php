<?php

// Switch Statements
// switch (expression) {
//     case label1:
//       //code block
//       break;
//     case label2:
//       //code block;
//       break;
//     case label3:
//       //code block
//       break;
//     default:
//       //code block
//   }


// //   Example
// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

$age = 30;

switch ($age){
    case 27:
        echo 'You are below 30 years';
        break;
    
    default:
        echo 'You are 30 and above';
    }

?>