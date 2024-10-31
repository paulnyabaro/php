<?php
// While loop
$i = 1;
while ($i < 6){
    print($i);
    $i++;
}


$age = 30;

echo('<br /><hr />');
while ($age >= 1){
    echo('Age is now: ' . $age . ', ');
    $age--;
}

echo('<hr />');

$j = 1;
while ($j < 6) {
  if ($j == 3) break;
  echo $j . ',';
  $j++;
}

echo('<hr />');

$k = 0;
while ($k < 6) {
  $k++;
  if ($k == 3) continue;
  echo $k . ',';
}

?>