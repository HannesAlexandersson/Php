<?php

$characters = [
    'Allison Reynolds',
    'Andrew "Andy" Clark',
    'Brian Ralph Johnson',
    'Claire Standish',
    'John Bender',
];
$lenght = count($characters);
$i = 0;
while ($i < $lenght){
    echo $characters[$i];?><br><?php
    $i++;
}