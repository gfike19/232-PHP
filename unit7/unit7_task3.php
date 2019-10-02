<?php

function DisplayLogFile(){
    $file = fopen("log.txt", "r");
    echo "<b>Log file contents:</b><br>";
    while (!feof($file)){
        $line = fgets($file);
        echo __LINE__.$line."<br>";
    }
    fclose($file);
}

echo "<b>Task 3</b><br>";
try {
    DisplayLogFile();
} catch (Exception $e){
    echo $e->getMessage();
}

?>