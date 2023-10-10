<?php

$hasParent = false;
$age = 17;

if ($hasParent === true && $age < 18){
    echo 'You can go ahead and watch The Square with your parents.';
}
elseif ( $hasParent === false && $age < 18){
    echo "Sorry. You're not allowed to watch The Square without your parents.";
}
elseif ($age > 18){
    echo "Welcome to the movie theatres, you're a grown-up!";
}