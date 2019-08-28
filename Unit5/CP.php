<?php

$produceList = array("bananas 0.59","grapes 2.99","apples 1.49","pears 1.39","lettuce 0.99",
"onions 0.79","potatoes 0.59","peaches 1.59"
);

$f = fopen("ProducePrice.txt", "w+");

foreach ($produceList as $value) {
    fwrite($f, $value);
    fwrite($f, "\n");
}
fclose($f);

function FileLineCount($fileName) {
}
?>