<?php

declare(strict_types=1);

$timestamps = [
    1373500800,
    1402012800,
    1433980800,
    1466121600,
    1496966400,
    1532649600,
];

// format d = dag som siffra M = månad som bokstäver Y = fyrsiffrig årtal
foreach($timestamps as $timestamp){
    echo date("d M Y", $timestamp);?><br><?php
}



/*
Copy the 07.php file from the resources directory. Loop through the array of release date timestamps and 
convert each timestamp into the following format: DD MMM YYYY using the date function. The output should 
look like the text below.

11 Jul 2013
06 Jun 2014
11 Jun 2015
17 Jun 2016
09 Jun 2017
27 Jul 2018
*/