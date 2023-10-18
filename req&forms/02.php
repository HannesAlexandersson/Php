<?php

if(isset($_GET['name'], $_GET['age'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
}
echo 'Hello, '.$name.' You are '.$age.' years old.';

/*
Continue working on the previous exercise. After our greeting we need to tell our forgetful user about their age.
 Within the isset check if the age query parameter exists or not. If it does, assign it to a new variable called
  $age and add it to the sentence. If you add ?name=Darren+Chris&age=30 to the URL you should get the output below.

Hello, Darren Chris! You're 30 years old.
*/