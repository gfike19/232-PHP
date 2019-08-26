<?php

// compare to JS version for understanding

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

$gradebook = Array(Array("Ron", "Bob", "Craig"), Array(
Array("A", "B", "A", "B"),
Array("B", "B", "C", "B"),
Array("C", "C", "B", "C")
));

for($i = 0; $i < count($gradebook[0]); $i++) {
    for($j = 0; $j <= strlen($gradebook[0][$i]) - 1; $j++){
        echo "Student Number: ".($i + 1)." Grade: ".$gradebook[1][$i][$j]."<br>";
    }
}

$salesRegion = Array(
    Array(), Array(), Array(), Array()
);

array_push($salesRegion[0], "North");
array_push($salesRegion[1], "West");
array_push($salesRegion[2], "East");
array_push($salesRegion[3], "South");

// for($i = 0; $i < sizeof($salesRegion); $i++){
//     echo $salesRegion[$i][0];
// } 

// echo "\n";

array_push($salesRegion[0], "Bob", "Will", "Ed");

// below prints array
//print_r($salesRegion);

array_push($salesRegion[1], "Rob", "Earl", "Bill");
array_push($salesRegion[2], "Mitch", "Paul", "Ralph");
array_push($salesRegion[3], "Eddy", "Hank", "Rudy");

for($i = 0; $i < sizeof($salesRegion); $i++){
    echo "SalesRegion: ".$salesRegion[$i][0]."<br>";

    for($j = 0; $j < sizeof($salesRegion[$i]); $j++){
        echo "Salesman: ".$salesRegion[$i][$j]."<br>";
    }
}

$salesTeam = Array();

for($i = 1; $i < sizeof($salesRegion[0]); $i ++) {
    array_push($salesTeam, $salesRegion[0][$i]);
}

$numTeam = "There are xx sales team members.";
echo str_replace("xx", sizeof($salesTeam), $numTeam)."<br>";

echo sizeof($salesTeam);
echo "<br>";
if(array_search('Will', $salesTeam) == true) {
    echo "Will is in the list.<br>";
}
else{
    echo "Will is not in the list.<br>";
}
echo str_replace("xx", sizeof($salesTeam), $numTeam)."<br>";
//TODO need to implement removal of items from array

// echo str_replace("xx", sizeof($salesTeam), $numTeam)."<br>";

?>