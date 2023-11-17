<?php
declare(strict_types=1);
$vampires_json = file_get_contents(__DIR__. '/vampires.json');
/* $decoded = json_decode($vampires_json, true); */
header('Content-Type: application/json');
echo $vampires_json;

/* 
for ($i = 0; $i < count($decoded); $i++) {
   echo $decoded[$i]['name'].' ';
} */
/*
Next step is to write a JSON API and fetch the data using fetch in JavaScript. 
Copy the 03 directory from the resources directory. Within the vampires.php file, 
implement a script which reads the content from the vampires.json file and prints 
it together with the header Content-Type set to application/json. If you visit 
vampires.php in the browser you should now see the list of vampires appear. 
Within the index.html file, fetch the JSON data from the vampires.php file, 
convert to JSON into an object and log it in the console. The output should 
look similar to the log below.
*/