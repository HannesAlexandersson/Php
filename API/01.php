<?php
declare(strict_types=1);
header('Content-Type: application/json');
/*
hen write some fresh and fine code that displays the content of the json file. 
*/
// spara pathen till filen i en variabel
$filename = "horse.json";
// öppna filen för läsning, fopen tar 2 arg, sökväg och läge, sökväg kan vara intertn eller extern, läge, r står för read, w står för write, a står för append
$handle = fopen($filename, "r");
// om filen finns, läs innehållet och skriv ut det, stäng filen annars errormsg. 
if($handle){
$contents = fread($handle, filesize($filename));
// omvandla från json till php-objekt
$decoded = json_decode($contents, true);
// skriv ut objektet
print_r($decoded['horses']);
//stäng filen för att frigöra resurser
fclose($handle);
}
else{
    echo "The file could not be read";
};