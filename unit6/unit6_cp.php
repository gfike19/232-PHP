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

// Set up the callback
assert_options(ASSERT_CALLBACK, 'my_assert_handler');
echo "<b>Task 1</b><br>";
function RangeCheck($num1) {
    assert($num1 < 1 && $num1 > 25, "RangeCheck passed");
}

$num1 = $_POST["num1"];
RangeCheck($num1);
?>