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
    assert($num1 < 1 && $num1 > 25, "RangeCheck passed");
}

function CheckForNull($value){
    assert($value == "" || $value == " ", "CheckForNull passed" );
}

//TODO tasks 3 and 4

function DivideByZero($num1, $num2){
    if($num2 == 0) {
        throw new Exception('Division by zero.'); 
    }
}

echo "<b>Task 1</b><br>";
$num1 = $_POST["num1"];
RangeCheck($num1);

echo "<br><b>Task 2</b><br>";
$value = $_POST["val"];
CheckForNull($value);

echo "<br><b>Task 5</b><br>";
try{
    DivideByZero(42, 0);
}catch (Exception $e){
    echo $e.getMessage();
}
?>