<?php
declare(strict_types=1);
/*
Create a new file and name it 07.php. We need to know if a given file exists or not. 
Implement a script which checks if the quotes.txt file exists or not. If the file exists, 
print the following text:
The file quotes.txt was found!
If the file doesn't exists, print the following text:
The file quotes.txt was not found.

Continue working on the the previous exercise. Instead of printing that the file was found, fetch the 
contents of the quotes.txt file and convert it into an array of multiple quotes. Print the first quote 
item in the array. The first line in the quotes.txt file and the output should be the exact same quote.
*/
if(file_exists('quotes.txt')){
    //echo 'The file quotes.txt was found!';
    $quoteArray = file('quotes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if($quoteArray !== false){    
    //getRandomQuotes($quoteArray);
    echo $getRandomQuote[$quoteArray];
    }else{
        echo 'The file could not be read.';
    }
}else{
    echo 'The file quotes.txt was not found.';
};

/* function getRandomQuotes(array $quoteArray):void
{
    $start = 0;
    $len = count($quoteArray - 1);
    $i = random_int($start, $len);
    echo $quoteArray[$i];    
}; */
//som arrow funktion
$getRandomQuote = fn(array $quoteArray): string => 
     $quoteArray[random_int(0, count($quoteArray) - 1)];