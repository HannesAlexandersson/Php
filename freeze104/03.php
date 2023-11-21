<?php
declare(strict_types=1);
session_start();
/*
Create a new file and name it 03.php. Let's recap sessions by adding two variables to the session 
and print them to the user. In the top of the file, start a new session. Add the following two 
variables to the session:
actor - Leonardo DiCaprio
title - The Revenant
Fetch the actor and title variables values from the session, build and print the following text:
Leonardo DiCaprio won the Academy Award for Best Actor for his portrayal of Hugh Glass in the 2015 
film The Revenant.

kolla 02.php
*/
$_SESSION['actor'] = 'Leonardo DiCaprio';
$_SESSION['title'] = 'The Revenant';
