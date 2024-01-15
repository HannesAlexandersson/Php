<?php
__DIR__ . require 'src/person.php';
__DIR__ . require 'src/employee.php';
__DIR__ . require 'src/student.php';
/*
Let's try inheritance again but this time adding our first method. Create a new file called 03.php. 
Create a new class called Student which extends the Person class. Add the public array property $grades. 
Define a new method called addGrade which accepts a string called $grade. The method should add the $grade 
to the $grades array. The method should have a return type of void since it doesn't return anything. 
Create a new instance of the Student class and name it Johannes Tveitan. Give Johannes the grades A and E on 
two separate lines using the addGrade method. Use the snippet below to validate your code.
*/

$student = new Student('Johannes Tveitan');

$student->addGrade('A');
$student->addGrade('F');

printf(
  'The student %s is graded with the following grades: %s',
  $student->name,
  implode(', ', $student->grades),
); // The student Johannes Tveitan is graded with the following grades: A, E