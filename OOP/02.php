<?php
__DIR__ . require 'src/person.php';
__DIR__ . require 'src/employee.php';
/*
Create a new file called 02.php. Create a new class called Employee which should extend the already 
existing Person class using the extend keyword. Remember that the class file shouldn't contain require. 
All classes should be loaded within the exercise file. Add a new public string property $title. 
Create a new Employee instance and name it Susan Johansson. Then give the $title property the value 
principle in the exercise file. If you try to run the code below, you should get the same result 
as in the comments.
*/
$employee = new Employee('Susan Johansson');
$employee->title = 'principal';

printf(
  '%s is the %s at Yrgo',
  $employee->name,
  $employee->title,
); // Susan Johansson is the principle at Yrgo