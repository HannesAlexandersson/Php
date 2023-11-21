<?php
declare(strict_types=1);
session_start();
/*
Create a new file and name it 02.php. Since we added the title cookie in the previous exercise 
we should be able to fetch it in a new PHP file. Build a script which checks if the title cookie 
exists. If the cookie does exist, fetch the value and print the following text in the browser 
using the $_COOKIE superglobal:
*/

if(isset($_COOKIE['title'])){
    
    echo 'The title of the film is: '.$_COOKIE['title'];
}
$actor = $_SESSION['actor'];
$title = $_SESSION['title'];
echo $actor.' won the Academy Award for Best Actor for his portrayal of Hugh Glass in the 2015 
film '.$title;

