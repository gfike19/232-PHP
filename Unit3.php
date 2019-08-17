<?php

$cars = Array("Chrysler", "Ford", "Toyota");

foreach($cars as $car){
    echo $car." ";
}
echo "<br>";
$days = Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

foreach($days as $day){
    echo $day." ";
}
echo "<br>";

for($i = count($days)- 1; $i >= 0; $i--){
    echo $days[$i];
}

$nums = Array();

for($i = 100; $i < 1000; $i += 100) {
    array_push($nums, $i);
}
echo "<br>";
foreach($nums as $num) {
    echo $num." ";
}



?>