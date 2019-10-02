<?php

ini_set("auto_dectect_line_endings", true);

function logFileSetup (){
    if (file_exists("log.txt")) {
        unlink("log.txt");
    }
    ini_set("log_errors", 1);
    ini_set("error_log", "log.txt");
}

function CloseLogFile(){
    $f = fopen("log.txt", "r");
    fclose($f);
}

function FirstDoThis() {
    echo "FirstDoThis<br>";
    error_log("FirstDoThis<br>");
}

function ThenDoThat(){
    echo "ThenDoThat<br>";
    error_log("ThenDoThat<br>");
}

echo "<b>Task 1</b><br>";
try{
    logFileSetup();
    FirstDoThis();
    ThenDoThat();
} catch (Exception $e) {
    echo "Error in task 1";
    error_log("Error in task 1");
}
CloseLogFile();

echo "<b>Task 2</b><br>";
try{
    logFileSetup();
    errors.arrayIsNull();
} catch(Exception $e){
    echo "arrayIsNull error occurred";
    error_log("arrayIsNull error occurred");
}

function DisplayLogFile(){
    $file = fopen("log.txt", "r");
    echo "<b>Log file contents:</b><br>";
    while (!feof($file)){
        $line = fgets($file);
        echo __LINE__.$line."<br>";
    }
    fclose($file);
}
DisplayLogFile();
CloseLogFile();


?>