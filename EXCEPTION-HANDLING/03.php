<?php
declare(strict_types=1);
namespace App\Bank;
require __DIR__ . '/vendor/autoload.php';


use App\Bank\Person;
use App\Bank\HormoneMonster;

/* 
Create a new class called HormoneMonster which accepts the public string property $name. Within the person 
class, add a new method called addHormoneMonster which accepts an instance of the HormoneMonster class. 
The hormone monster instance should be attached to a $monster property on the person class. Create a new 
file called 03.php, import the classes, create a new person with the name Nick Birch who is 12 years old, 
create a new hormone monster with the name Maury and attach it to Nick using the new method. Try running the 
code below to see if everything checks out.
*/
$person = new Person("Nick Birch", 12, $hormoneMonster);//create an instance of the person class
$hormoneMonster = new HormoneMonster("Maury");//create an instance of the monster class
$person->addHormoneMonster($hormoneMonster);
//attach the monster to the person with the method

printf('%s hormone monster is %s', $person->name, $person->monster->name); // Nick Birch hormone monster is Maury