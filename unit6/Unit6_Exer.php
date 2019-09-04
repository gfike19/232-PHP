<?php
// // Active assert and make it quiet
// assert_options(ASSERT_ACTIVE, 1);
// assert_options(ASSERT_WARNING, 0);
// assert_options(ASSERT_QUIET_EVAL, 1);

// // Create a handler function
// function my_assert_handler($file, $line, $code)
// {
//     echo "<hr>Assertion Failed:
//         File '$file'<br />
//         Line '$line'<br />
//         Code '$code'<br /><hr />";
// }

// // Set up the callback
// assert_options(ASSERT_CALLBACK, 'my_assert_handler');

// $uInput = $_POST["uInput"];

// // Make an assertion that should fail
// assert(!empty($uInput), "Parameter must not be null");

// Active assert and make it quiet
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

// Create a handler function
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
$num2 = $_POST["num1"];
assert($num2 > 25, "Number must be greater than twenty five");
echo "<br><b>Exercise 4</b><br>";
$num3 = $_POST["num1"];
assert($num3 < 5, "Number must be less than five");
?>