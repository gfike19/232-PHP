<?php

ini_set("auto_dectect_line_endings", true);

function logFileSetup (){
    if (file_exists("log.txt")) {
        unlink("log.txt");
    }
    ini_set("log_errors", 1);
    ini_set("error_log", "log.txt");
}

// function CloseLogFile(){
//     Console.Error.Close();
// }

function DisplayLogFile(){
    $file = fopen("log.txt", "r");
    echo "<b>Log file contents:</b><br>";
    while (!feof($file)){
        $line = fgets($file);
        echo __LINE__.$line."<br>";
    }
    fclose($file);
}

function FileDoesNotExist () {
    $file = fopen("ProducePrice.txt", "r");
    throw (new Exception('Files does not exist<br>'));
    return true;
}

function DivideByZero($num1, $num2){
    if ($num2 == 0) {
        throw new Exception("Tried to divide by zero<br>");
    }
    return true;
}

function ArrayOutOfBounds($arr){
    $arr[4] = 4;
    throw new Exception("Array out of bounds<br>");
    return true;
}

echo "<br><b>Excercises 1 -5</b><br>";

logFileSetup();

try {
    FileDoesNotExist();
} catch(Exception $e){
    echo $e->getMessage()."<br>";
    error_log($e->getMessage());
}

try {
    $arr = array(1, 2, 3);
    ArrayOutOfBounds($arr);
} catch(Exception $e){
    echo $e->getMessage()."<br>";
    error_log($e->getMessage());
}

try {
    DivideByZero(6,0);
} catch(Exception $e){
    echo $e->getMessage();
    error_log($e->getMessage());
}
// CloseLogFile();
DisplayLogFile();

?>