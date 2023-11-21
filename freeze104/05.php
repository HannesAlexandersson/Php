<?php
declare(strict_types=1);
session_start();
/*
Create a new file and name it 05.php. Remember the page views counter from the previous 
4lesson? This time we're going to build it using the file_put_contents and file_get_contents functions. 
Every time the user reloads the browser, set or increment an integer in a file called counter.txt and 
present the number to the user. The output could look like the text below.
Number of page views: 1820
*/


if(isset($_SESSION['counter'])) {
    //om session var finns, öka värdet med 1 
    $_SESSION['counter']++;
    $counter = $_SESSION['counter'];
    //lagra i txt filen
    file_put_contents('counter.txt', $counter);
} else {
    // om SESSIONn INTE finns, skapa den med värdet av 1
    $_SESSION['counter'] = 1;
}
//hämta från txt filen
$displayCounter = file_get_contents('counter.txt');
$displayCounterInt = intval($displayCounter);
//visa antal
echo 'Number of page views: '.$displayCounterInt;
