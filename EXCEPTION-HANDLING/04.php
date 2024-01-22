<?php
declare(strict_types=1);
namespace App\Bank;
require __DIR__ . '/vendor/autoload.php';
use Exception;
use App\Bank\Person;
use App\Bank\HormoneMonster;
/*
Continue working on the previous exercise in a new file. Wrap your logic within a try catch statement 
and echo the exception message. Within the addHormoneMonster method, check if the person is below 13 
and throw an exception with the message below. Name is dynamic.
*/
$hormoneMonster = new HormoneMonster("Maury");//create an instance of the monster class
$person = new Person("Nick Birch", 12, $hormoneMonster);//create an instance of the person class
try{
  $person->addHormoneMonster($hormoneMonster);
}catch (Exception $e) {
  echo $e->getMessage();
}

