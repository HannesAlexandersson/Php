<?php
declare(strict_types=1);
namespace App\Bank;
require __DIR__ . '/vendor/autoload.php';

use App\Bank\AgeValidation;
use App\Bank\Person;

/* 
01.
Create a new file called 01.php and import the autoload file from the vendor directory. 
Create a new person instance with the name Jay Bilzerian and age 13. Write a script which 
checks if Jay is old enough to drive. If he is younger than 18, throw a new exception with 
the message below. Note that the name should be dynamic. Since Jay is younger than 18, the 
exception should be thrown and your script should stop.
02.
Now you know how to throw an exception. Now we're going to wrap our script within a try catch statement. 
Continue working on the previous exercise in a new file. Put the logic within the try block and catch the 
exception below it. Assign the exception to a variable called, you guessed it, $exception. Within the catch 
block, echo the error message using the getMessage() method. This time, use the name Jessi Glaser instead.
*/
//$person = new Person("Jay Bilzerian", 13);
//$person = new Person("Jessi Glaser", 13);



try {  
  AgeValidation::checkAge($person->age, $person->name);//calls the static method of the class AgeValidation with the age and name of the instance of person class
} catch (AgeValidation $e) {
  echo $person->name. " " . $e->errorMessage();//if exception is thrown echo the users name with the error message
} 