<?php
__DIR__ . require 'src/person.php';
/*
Create a new class called Person which accepts the public string $name. 
Create a new instance of the Person class in the exercises file, name it Maria Eklöw, 
save the new person into a variable called $person and then echo the person's name.
*/

$person = new Person('Maria Eklöw');
echo $person->name;
