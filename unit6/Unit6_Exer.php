<?php
// Active assert and make it quiet
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

// Create a handler function
// line below is needed to take in info from assert
function my_assert_handler($file, $line, $code, $desc = null)
{
    // echo "Assertion failed at $file:$line: $code";
    // if ($desc) {
    //     echo ": $desc";
    // }
    // echo "<br>";

        if ($desc) {
        echo $desc;
    }
}

// Set up the callback
assert_options(ASSERT_CALLBACK, 'my_assert_handler');

$uInput = $_POST["uInput"];
echo "<b>Exercise 1</b><br>";
// Make an assertion that should fail
assert($uInput != null, "Parameter must not be null");
echo "<br><b>Exercise 2</b><br>";
$num1 = $_POST["num1"];
assert($num1 > 0, "Number must be greater than zero");
echo "<br><b>Exercise 3</b><br>";
$num2 = $_POST["num2"];
assert($num2 > 25, "Number must be greater than twenty five");
echo "<br><b>Exercise 4</b><br>";
$num3 = $_POST["num3"];
assert($num3 < 5, "Number must be less than five");
echo "<br><b>Exercise 5</b><br>";
$num4 = $_POST["num4"];
assert($num4 <= 10, "Number must be less than or equal to 10");
echo "<br><b>Exercise 6</b><br>";
$num5 = $_POST["num5"];
assert($num5 == 10, "Number must be equal to seven");
echo "<br><b>Exercise 7</b><br>";
$num6 = $_POST["num6"];
assert($num6 != 3, "Number must not be equal to three");

function divByZero($num) {
    return $num/0;
}
$arr = array();
$arr[0] = 19;
$arr[1] = 23;
$arr[2] = 42;
function arrOutbound($arr, $num) {
    return  $arr[$num];
}

// function runtime($num){
//     $arr[4] = $num;
// }

$num7 = $_POST["num7"];

try{
    divByZero($num7);
    arrOutbound($arr, $num7);
    funcCall();
}
catch(Exception $e) {
    echo $e->getMessage();
}
?>