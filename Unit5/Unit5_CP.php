<?php

$produceList = array("bananas 0.59","grapes 2.99","apples 1.49","pears 1.39","lettuce 0.99",
"onions 0.79","potatoes 0.59","peaches 1.59"
);

$f = fopen("ProducePrice.txt", "w+");

foreach ($produceList as $value) {
    fwrite($f, $value.PHP_EOL);
    // fwrite($f, "\n");
}
fclose($f);

function FileLineCount($fileName) {
    $f = fopen($fileName, "r");
    $lines = fread($f, filesize($fileName));
    fclose($f);
    $arr = explode(PHP_EOL, $lines);
    $count = 0;
    // offset is needed as last line is empty
    // real world would check for this with conditional
    while($count < sizeof($arr) - 1){
        $count++;
    }
    return $count;
}

$count1 = FileLineCount("ProducePrice.txt");
 echo "<b>Task 1</b><br>There are ".$count1." products in the file.";

$more = array("peppers 0.99","celery 1.29","cabbage 0.79","tomatoes 1.19");
$newfile = fopen("ProducePrice.txt", "a+");
foreach ($more as $value) {
    fwrite($newfile, $value);
    fwrite($newfile, PHP_EOL);
}
fclose($newfile);
$count2 = FileLineCount("ProducePrice.txt");
echo "<br><b>Task 2</b><br>There are ".$count2." products in the file.";

$arr = array();
$index = 1;
$handle = fopen("ProducePrice.txt", "r");
echo "<br><b>Task 3</b><br>";
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        array_push($arr, $line);
        echo $index." ".$line."<br>";
        $index++;
    }

    fclose($handle);
} else {
    echo "Error reading file";
} 

echo "There are ".sizeof($arr)." products in the produce list.";
?>