<?php

declare(strict_types=1);

namespace App\Bank;

use App\Bank\HormoneMonster;
use Exception;

/*
Create a new Person class within the src directory which accepts the public $name and $age properties. 
Create a new file called 01.php and import the autoload file from the vendor directory. 
Create a new person instance with the name Jay Bilzerian and age 13. Write a script which 
checks if Jay is old enough to drive. If he is younger than 18, throw a new exception with 
the message below. Note that the name should be dynamic. Since Jay is younger than 18, the 
exception should be thrown and your script should stop.
*/
class Person
{
  

  public function __construct(
    public string $name,
    public int $age,
    public HormoneMonster $monster
) {
  $this->name = $name;
  $this->age = $age;
  
}


public function addHormoneMonster(HormoneMonster $newHormoneMonster) {
  if($this->age >= 13){//check if the person is 13 or older   
    $this->monster = $newHormoneMonster;//the monster property is set to the newHormoneMonster parameter
  }else {//if not 13 or older
    throw new Exception($this->name." has to be a teenager before getting a hormone monster.");//this error gets thrown
    exit;
  }
}
}