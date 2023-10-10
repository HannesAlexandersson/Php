<?php

$currentYear = date('Y');

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];

foreach($actors as $actor){
    $decade = $currentYear - $actor[1];
    if ($decade >= 20 && $decade <= 30 ){
        echo $actor[0]."is in his/hers twenties.";?><br><?php
    }
    elseif ($decade >= 30 && $decade <= 40 ){
        echo $actor[0]."is in his/hers therties.";?><br><?php
    }
    elseif ($decade >= 40 && $decade <= 50 ){
        echo $actor[0]."is in his/hers fourties.";?><br><?php
    }
    elseif ($decade >= 50 && $decade <= 60 ){
        echo $actor[0]."is in his/hers fiftys.";?><br><?php
    }
    elseif ($decade >= 60 && $decade <= 70 ){
        echo $actor[0]."is in his/hers sixtyes.";?><br><?php
    }
    elseif ($decade >= 70 && $decade <= 80 ){
        echo $actor[0]."is in his/hers seventys.";?><br><?php
    }
}