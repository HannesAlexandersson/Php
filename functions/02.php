<?php
$greeting = greet('Ace', 'Ventura');

function greet ($firstName, $lastName){
 echo 'Hey'.$firstName.' '.$lastName;
}
echo $greeting;