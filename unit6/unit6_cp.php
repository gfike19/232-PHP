<?php

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

function my_assert_handler($file, $line, $code, $desc = null)
{
    if ($desc) {
        echo $desc;
    }
}

assert_options(ASSERT_CALLBACK, 'my_assert_handler');

function RangeCheck($num1) {
    assert($num1 >= 1 && $num1 <= 25, "Parameter must be greater than 1 and less than 25<br>");
    echo "RangeCheck passed";
}

function CheckForNull($value){
    assert($value != "" || $value != " ",  "Parameter must not be null<br>");
    echo "CheckForNull passed";
}

function DivideByZero($num1, $num2){
    if($num2 == 0) {
        throw new Exception('Division by zero.'); 
    }
    return true;
}

function ArrayOutOfBounds($arrayTest) {
    $arrayTest[4] = 40;
    throw new Exception("Array out of bounds"); 
    return true;
}

function FileDoesNotExist() {
    $file = fopen('ProducePrice.txt', "w");
    throw new Exception("file does not exist");
    return true;
}

echo "<b>Task 1</b><br>";
$num1 = $_POST["num1"];
RangeCheck($num1);

echo "<br><b>Task 2</b><br>";
$value = $_POST["val"];
CheckForNull($value);

echo "<br><b>Task 3</b><br>";

$arrayTest = array(10, 20, 30);

try {
    ArrayOutOfBounds($arrayTest);
}catch(Exception $e){
    echo "ArrayOutOfBounds error occured<br>";
    echo "Caught exception: ".$e->getMessage();
}

echo "<br><b>Task 4</b><br>";

try{
    FileDoesNotExist();
}catch(Exception $e) {
    echo "FileDoesNotExist error occured<br>";
    echo "Caught exception: ".$e->getMessage();
}

echo "<br><b>Task 5</b><br>";
try{
    DivideByZero(42, 0);
}catch (Exception $e){
    echo $e->getMessage();
}
?>