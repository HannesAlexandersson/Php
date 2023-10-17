<?php

declare(strict_types=1);

$actors = [
    'Abigail Savage',
    'Adrienne C. Moore',
    'Danielle Brooks',
    'Dascha Polanco',
    'Jackie Cruz',
    'Kate Mulgrew',
    'Kimiko Glenn',
    'Laura Prepon',
    'Lea DeLaria',
    'Michael Harney',
    'Nick Sandow',
    'Selenis Leyva',
    'Taryn Manning',
    'Taylor Schilling',
    'Uzo Aduba',
    'Yael Stone',
];
// i stripos första parameter anger jag att jag vill leta i position 0  i varje string, eftrsom $actor = varje arrayitem så är $actor[o] första positionen i varje item
$actors = array_filter($actors, function ($actor) {
    if (stripos($actor[0],"k",) !== false){
        return true;
    }});
    var_dump($actors);
/*
Copy the 08.php file from the resources directory. We need to lookup the actor database to find which 
actor names start with the letter K. Loop through the $actors array using the array_filter function.
 If the first letter in the actor's name starts with K return true, otherwise return false. Re-assign the 
 $actors variable with the array returned from the array_filter function. The output should look like the var_dump below.

['Kate Mulgrew', 'Kimiko Glenn']
*/