<?php

$members = array("peter" => "3", "ken" => "12", "jan"=> "5");

foreach ($members as $member => $position){
    echo ("$member : $position <br />");
}

$m = 2;
do {
    echo ("$m ,");
    $m++;
}
while($m <= 10);

?>