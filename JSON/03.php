<?php
declare(strict_types=1);
$show = [
    'title' => 'Girls',
    'tmdb_url' => 'https://www.themoviedb.org/tv/42282-girls',
    'description' => 'The assorted humiliations, disasters and rare triumphs of four very different twenty-something girls: Hannah, an aspiring writer; Marnie, an art gallery assistant and cousins Jessa and Shoshanna.',
];
$encoded = json_encode($show);
// skapar en fil som heter show.json och lägger in  datan i $encoded i den filen. 
file_put_contents(__DIR__ . '/show.json', $encoded);
// Skriv ut JSON-data
echo $encoded;
exit;
/*
Now we've converted the array into JSON. Next step is to save the data to our filesystem. 
Continue working on the previous exercise. Remove the header function and instead of printing 
the data, save the JSON data into a file called show.json. If you visit the show.json file in 
your editor it should look like JSON below.
*/