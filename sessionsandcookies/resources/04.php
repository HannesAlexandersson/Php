<?php

declare(strict_types=1);

$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];

$password = 'username-is-password';


if (password_verify($password, $user['password'])){
    echo 'Welcome, Bertram Gilfoyle!';
}else{
    echo 'Whoops. Looks like you missed something. Please try again.';
}

/*
There are great tools available in the PHP framework to work with and build login systems. 
Using the password_verify function, validate the $password variable against the password 
item in the $user array. If passwords match, print the following text:

Welcome, Bertram Gilfoyle!
If the passwords doesn't match, print the following text:

Whoops. Looks like you missed something. Please try again.
Try setting the $password variable to something else to test the conditionals.

*/