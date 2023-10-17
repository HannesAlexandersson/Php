<?php

declare(strict_types=1);

$quote = 'llA smelborp era gnirob litnu er\'yeht ruoy .nwo';


$characters = explode(" ",$quote);
$newArray = [];
foreach($characters as $character){
    $newArray[] = strrev($character);
}

$quote = implode(" ",$newArray);
echo $quote;



/*
Copy the 05.php file from the resources directory. The words within the $quote variable are reversed. 
We need to convert the sentence back into a readable format. Use the knowledge you've learned from the 
previous exercises to reverse the words. We suggest you checkout the explode, strrev and implode functions to 
complete this exercise. The output should look like the text below.
*/