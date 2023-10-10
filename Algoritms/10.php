<?php

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];
foreach($actors as $actor){
    switch($actor[1]){
        case $actor[1] < 2000  && $actor[1] > 1990:
            echo $actor[0].'was born in the nintys';?><br><?php
            break;
        case $actor[1] < 1990  && $actor[1] > 1980:
            echo $actor[0].'was born in the eightys';?><br><?php
            break;
        case $actor[1] < 1980  && $actor[1] > 1970:
            echo $actor[0].'was born in the seventys';?><br><?php
            break;
        case $actor[1] < 1970  && $actor[1] > 1960:
            echo $actor[0].'was born in the sixtys';?><br><?php
            break;
        case $actor[1] < 1960  && $actor[1] > 1950:
            echo $actor[0].'was born in the fiftys';?><br><?php
            break;
    }
}