<?php
__DIR__ . require 'src/school.php';
__DIR__ . require 'src/program.php';


/*
Create a new file called 05.php. Create the new class Program which accepts the public string $name. 
Create another class School which also accepts a public string called $name. The School class should 
also have the private array property $programs. Define a new method called addProgram which allows you 
to add a Program to the $programs array. Remember to type hint the Program class. When you're ready, 
create a new school called Yrgo and add the two programs Webbutvecklare and Digital Designer. 
Define a method called getPrograms which you can use to access the $programs property on the School class 
since the property is private. Within a <p> tag write the sentence At Yrgo you can apply to the following 
programs:. Yrgo should of course be dynamic. Then list the programs within an unordered list just below the 
paragraph.
*/

$school = new School('Yrgo');
$school->addProgram('Webbutvecklare');
$school->addProgram('Digital Design');
?>

<p>At <?= $school->name ?> you can apply to the following programs:</p>
<ul>
  <?php foreach ($school->getProgram() as $program){ ?>
  <li>
    <?= $program ?>
  </li><?php } ?>
</ul>