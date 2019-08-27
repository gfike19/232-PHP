<?php

function Exer1 (){
    $FamousWords = array(
        "Now", "is", "the", "time", "for", "all", "good", "men", "to", "come", "to", "the", 
        "aid", "of", "their", "country.");
    
        $f = fopen("FamousWords.txt", "w+");
    
        foreach ($FamousWords as $value) {
            // cannot be done
            // $value += " ";
            fwrite($f, $value);
            // below places spacing in between words
            fwrite($f, " ");
        }
    
        fclose($f);
}

    function ReadFileAndStoreInArrayList($fileName){
        $f = fopen($fileName, "r");
        // lines will be a string
        $lines = fread($f, filesize($fileName));
        fclose($f);
        $arr = explode(" ", $lines);
        // below does work
        // $lines = file($fileName, FILE_IGNORE_NEW_LINES);
        return $arr;
    }

     function DisplayOneWordAtATime($arr) {
         foreach ($arr as $value) {
             echo $value."<br>";
         }
     }

     function AllOnOneLine($arr){
        foreach ($arr as $value) {
            echo $value." ";
        }
     }

    function Exer5() {
        // sidebar i prefer "Sphinx of black quartz, judge my vow!" in terms of panagrams
        $words = array("The", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog.");
        $f = fopen("testFile.txt", "w+");
    
        foreach ($words as $value) {
            fwrite($f, $value);
            // below places spacing in between words
            fwrite($f, "\n");
        }
        fclose($f);
    }

    // Exer1();
    // $arr = ReadFileAndStoreInArrayList("FamousWords.txt");
    // DisplayOneWordAtATime($arr);
    // AllOnOneLine($arr);
    // Exer6();
?>