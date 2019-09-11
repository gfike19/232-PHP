<?php

$errorLog = fopen("errorLog.txt", "w");
$errorLog.close();

function DisplayLogfile() {
    $errorFile = fopen("errorLog.txt", "r");
    echo var_dump($errorFile);
}
class Errors{

    function divideByZero (){
        error_log(2/0, 3, "errorLog.txt");
        addNewLine();
    }

    function FileDoesNotExist() {
        error_log($f = fopen("test.txt", "w"), 3, "errorLog.txt");
        addNewLine();
    }

    function arrayOutOfBounds() {
        $arr = array(57, 39, 61);
        error_log($arr[4], 3, "errorLog.txt");
        addNewLine();
    }

    function arrayIsNull(){
        
    }
}

function addNewLine (){
    $errorLog = fopen("errorLog.txt", "a");
    fwrite($errorLog, "\n");
    fclose($errorLog);
}
?>