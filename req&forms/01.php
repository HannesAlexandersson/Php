<?php

if(isset($_GET['name'])){
    $name = $_GET['name'];
}
echo 'Hello, '.$name.' !';


/*
Continue working on the previous exercise. We want to greet our user with an "Hello!". 
Add an if statement where you check if the query parameter isset. Then assign the query
 parameter name to a new variable called $name. Print the greeting along with the name using echo. 
 If you add ?name=Darren+Chris to the URL you should get the following output:

Hello, Darren Chris!

*/