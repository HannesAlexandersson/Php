<?php

function getQuote($character = 'Ace Ventura'){
    if($character === 'Ace Ventura'){
        echo 'LOOO-HOOO-ZUH-HER!';
    }
    elseif ($character === 'Dan Merino'){
        echo "You're a weird guy, Ace. A weird guy.";
    }
    else {
        echo 'No character was found with that name';
    }
}

// Get quote by Ace Ventura if no character is given.
echo getQuote(); // LOOO-HOOO-ZUH-HER!

// Get error message if given character doesn't exist.
echo getQuote('Jim Carrey'); // We couldn't find the given character!
echo GetQuote('Hannes Hansson');