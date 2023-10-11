<?php

// TODO: Implement the getQuote function.


function getQuote($character){
    if($character === 'Ace Ventura'){
        echo 'LOOO-HOOO-ZUH-HER!';
    }
    elseif ($character === 'Dan Merino'){
        echo "You're a weird guy, Ace. A weird guy.";
    }
}
// Get quote by Ace Ventura.
echo getQuote('Ace Ventura'); // LOOO-HOOO-ZUH-HER!

// Get quote by Dan Merino.
echo getQuote('Dan Merino'); // You're a weird guy, Ace. A weird guy.
