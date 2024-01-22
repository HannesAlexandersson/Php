<?php
declare(strict_types=1);
namespace App;
require __DIR__ . '/vendor/autoload.php';
use Exception;
use App\Bank\Person;
use App\Bank\HormoneMonster;
use InvalidArgumentException;
use App\Bank\Exceptions\InvalidNameException;
/*
Luckily there is an exception called InvalidArgumentException built-in into PHP. We should be 
able to use that to invalidate any other name. In 05.php, create a new hormone monster called 
Coach Steve. This should throw an exception since it isn't valid name. Format the message as below. 
The message should be picked up and printed using try catch.
*/
/* 
try{
$hormoneMonster = new HormoneMonster("Coach Steve");
$person = new Person("Nick Birch", 12, $hormoneMonster);
$person->addHormoneMonster($hormoneMonster);
}catch (InvalidNameException $e) {//catches exceptions with invalid arguments given, in this case an faulty name
  echo $e->getMessage();
}catch (Exception $e) {// cathes general exceptions
  echo $e->getMessage();
} */