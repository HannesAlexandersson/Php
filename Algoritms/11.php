<?php

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];
foreach($actors as $actor){
$return_value = match(true){
    $actor[1] > 1990 && $actor[1] < 2000 => $actor[0].'is born in the nintys',
    $actor[1] > 1980 && $actor[1] < 1990 => $actor[0].'is born in the eightys',
    $actor[1] > 1970 && $actor[1] < 1980 => $actor[0].'is born in the seventys',
    $actor[1] > 1960 && $actor[1] < 1970 => $actor[0].'is born in the sixtys',
    $actor[1] > 1950 && $actor[1] < 1960 => $actor[0].'is born in the fiftys', 
};
echo $return_value;?><br><?php
}