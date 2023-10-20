<?php

declare(strict_types=1);

$emails = [
    'j@e',
    'jesse@f.com',
    'jesse.eisenberg',
    'eisenberg@facebook',
    'jesse.eisenberg@facebook.com',
];

foreach($emails as $email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false){
        echo 'The email '.$email.' is valid.';?><br><?php
}}



/*
 Display a list of valid email addresses using a foreach loop, the filter_var function and a validation filter constant for emails. 
 The output should look like the list below.

The email jesse@f.com is valid.
The email jesse.eisenberg@facebook.com is valid.
*/