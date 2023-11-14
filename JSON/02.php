<?php
declare(strict_types=1);
$show = [
    'title' => 'Girls',
    'tmdb_url' => 'https://www.themoviedb.org/tv/42282-girls',
    'description' => 'The assorted humiliations, disasters and rare triumphs of four very different twenty-something girls: Hannah, an aspiring writer; Marnie, an art gallery assistant and cousins Jessa and Shoshanna.',
];
$encoded = json_encode($show);

// Sätt rätt Content-Type header
header('Content-Type: application/json');

// Skriv ut JSON-data
echo $encoded;
exit;
/*
Notice how the browser didn't display the JSON in a pretty format? That's because the 
browser thought it was given HTML. Continue working on the previous exercise. Before 
printing the JSON string in the browser, using the header function, change the response 
Content-Type to tell the browser that the content is returned as JSON. If you're using a 
JSON formatter/viewer, the output should now look like the JSON below.

*/