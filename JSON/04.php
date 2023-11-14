<?php
declare(strict_types=1);
$showData = file_get_contents(__DIR__ . '/show.json');
$shoData_decoded = json_decode($showData, true);
echo $shoData_decoded['description'];
/*
Imagine we've been given access to an API with an endpoint which gives us JSON data. 
We want to convert the JSON into arrays. Create a new file and name it 04.php. Fetch 
the JSON data from the show.json file. Using the json_decode function, convert the 
JSON string into an associative array. Fetch the value of the description key and 
print it in the browser. The output should look like the text below.

*/