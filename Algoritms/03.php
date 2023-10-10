<?php 
$firstName = 'Hannes';
$lastName = 'Östlund';
if ( $firstName === 'Ruben' ){
    echo 'Your first name is Ruben.';
}elseif ($firstName != 'Ruben' && $lastName === 'Östlund') {
    echo 'Your fistname is not Ruben but your lastname is Östlund';
}
else {
    echo 'Your name is not Ruben Östlund.';
}