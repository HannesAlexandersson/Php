<?php
declare(strict_types=1);
//isset returns true om variabeln är set, och false om den är null. Så skulle vi var dumpa isset så skulle vi få true om den är set.
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
if (isset($_GET['age'])){
    $age = $_GET['age'];
}
echo 'Hello '.$name.' . You are '.$age.' years old';


/*
Continue working on the previous exercise. We want to greet our user with an "Hello!". 
Add an if statement where you check if the query parameter isset. Then assign the query parameter 
name to a new variable called $name. Print the greeting along with the name using echo. If you add
 ?name=Darren+Chris 
 to the URL you should get the following output:

Hello, Darren Chris!
*/