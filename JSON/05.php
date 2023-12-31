<?php
declare(strict_types=1);
// URL till JSON-filen på GitHub, nope laddade ner den istället
$json_url = 'https://raw.githubusercontent.com/yrgo/WU23/master/PHP/24%20-%20JavaScript%20Object%20Notation/resources/girls.json?token=GHSAT0AAAAAACHG7CSJBTADRR2SZHOK3PGWZKTJZFQ';

// Hämta JSON-data från URL
$json_data = file_get_contents($json_url);

// Avkoda JSON till en PHP-array
$data_array = json_decode($json_data, true);

// Gör något med den avkodade datan
?>
<ul><?php
    foreach ( $data_array['actors'] as $key => $data):?>
        <li><?='The character '.$data['character'].' is portayed by ' .$data['name']?></li>
        <?php endforeach; ?>
    </ul><?php
/*
print_r($data_array); //(t.ex. skriv ut den)
Okay, let's try this again. Create a new file and name it 05.php. 
This time our JSON data contains an array of actors. Fetch the 
JSON data from the girls.json file. Convert the JSON string into 
an associative array. With a loop print the actors from the actors 
array in an <ul> list. The output should look like the list below.
 -The character Hannah Horvath is portrayed by Lena Dunham.
*/
