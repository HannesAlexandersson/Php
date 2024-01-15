<?php
__DIR__ . require 'src/person.php';
__DIR__ . require 'src/employee.php';
__DIR__ . require 'src/student.php';
/*
You've learned how to define public properties and methods. Now lets look at how we can work with private 
properties. The difference between a public and a private property is that we can't access it outside the 
class scope. Create a new file called 04.php. Add the new private integer property $yearlySalary to the 
Employee class. Define two new methods on the Employee class called:

setYearlySalary - This method accepts the integer $salary which updates the $yearlySalary property on 
the Employee class.

getMonthlySalary - This method should return the yearly salary divided by the number of months 
of a year and return a float.

Create a new instance of the Employee, name it Susan Johansson, set the yearly salary 
using the setYearlySalary method and give it the value of 684000. Use the snippet below to validate your code.
*/

$employee = new Employee('Susan Johansson');
$employee->setYearlySalary(684000);

printf(
  '%s earns %d kr a month at Yrgo',
  $employee->name,
  $employee->getMonthlySalary(),
); // Susan Johansson earns 57000 kr a month at Yrgo