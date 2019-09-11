<?php

$errorLog = fopen("errorLog.txt", "w");
fclose($errorLog);

function DisplayLogfile() {
    $errorFile = fopen("errorLog.txt", "r");
    echo var_dump($errorFile);
}
class Errors{

    function divideByZero (){
        error_log(2/0, 3, "errorLog.txt");
        addNewLine();
    }
    function arrayOutOfBounds() {
            $arr = array(57, 39, 61);
            error_log($arr[4], 3, "errorLog.txt");
            addNewLine();
        }
    // function FileDoesNotExist() {
    //     error_log(fopen("test.txt", "w"), 3, "errorLog.txt");
    //     addNewLine();
    // }

    

    function arrayIsNull(){
        $arr = array();
        error_log(sizeof($arr), 3, "errorLog.txt");
        addNewLine();
    }
}

function addNewLine (){
    $errorLog = fopen("errorLog.txt", "a");
    fwrite($errorLog, "\n");
    fclose($errorLog);
}

$e = new Errors();

try {
    $e ->arrayIsNull();
} catch(Exception $e){

}

try{
    $e ->arrayOutOfBounds();
} catch(Exception $e){

}

try{
    $e ->divideByZero();
}catch(Exception $e) {

}

// try{
//     $e ->FileDoesNotExist();
// } catch(Exception $e) {
    
// }

DisplayLogfile();
?>