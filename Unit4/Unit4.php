<?php

function Exer1(){
    echo "<b>Exercise 1</b><br>";

$cars = array(
    array("make", "model", "color"),
    array("make", "model", "color"),
    array("make", "model", "color")
);

$make = array("Toyota", "Ford", "Chevrolet");
$model = array("Camrery", "Mustang", "Nova");
$color =array("Blue", "Red", "Yellow");

for($i = 0; $i < sizeof($cars); $i++){
    echo $make[$i]." ".$model[$i]." ".$color[$i]."<br>";
}
Exer2();
}
//dictionaries below
function Exer2(){
    echo "<b>Exercise 2</b><br>";
    $fruits = array(
        "apple" => 4,
        "banana" => 5,
        "kiwi" => 3,
        "pear" => 4
    );

    echo var_dump($fruits);
    echo "<br>";
    Exer3();
}

function Exer3(){
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<b>Exercise 3</b><br>";
    foreach($days as $day) {
        echo $day." ";
    }

    $days = array_reverse($days);
    echo "<br>";
    foreach($days as $day) {
        echo $day." ";
    }
    $workingDays = array_slice(array_reverse($days), 1, 5);
    echo "<br>";
    foreach($workingDays as $day) {
        echo $day." ";
    }
    Exer4();
}

function Exer4(){
    $stack = array();
    array_push($stack, 10, 24, 31, 45, 19, 76);
    echo "<br><b>Exercise 4</b><br>";
    echo sizeof($stack);
    array_pop($stack);
    array_pop($stack);
    array_pop($stack);
    echo "<br>".sizeof($stack)."<br>";
    echo $stack[sizeof($stack) - 1];
}

function Exer5 (){
    $q = array();
    array_push($q, 10, 24, 31, 45, 19, 76);
    echo var_dump($q)."<br>".sizeof($q)."<br>";
    array_shift($q);
    array_shift($q);
    echo var_dump($q)."<br>".sizeof($q)."<br>";
}

Exer5();


?> 