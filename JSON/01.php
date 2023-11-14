<?php
declare(strict_types=1);

/*
Let's convert our first PHP array into JSON. Create a new file and name it 01.php. 
Copy the $show array from the resources directory. Using the json_encode convert 
the array into a JSON string and print it in the browser. The output should look 
like the JSON below.

*/
$show = [
    'title' => 'Girls',
    'tmdb_url' => 'https://www.themoviedb.org/tv/42282-girls',
    'description' => 'The assorted humiliations, disasters and rare triumphs of four very different twenty-something girls: Hannah, an aspiring writer; Marnie, an art gallery assistant and cousins Jessa and Shoshanna.',
];
$encoded = json_encode($show);
echo $encoded;