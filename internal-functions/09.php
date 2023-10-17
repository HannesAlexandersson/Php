<?php

declare(strict_types=1);

$episodes = [
    ['title' => 'Bed Bugs and Beyond', 'released_at' => strtotime('11 Jun 2015')],
    ['title' => 'Comic Sans', 'released_at' => strtotime('6 Jun 2014')],
    ['title' => 'Double Trouble', 'released_at' => strtotime('27 Jul 2018')],
    ['title' => 'I Wasn\'t Ready', 'released_at' => strtotime('11 Jul 2013')],
    ['title' => 'Litchfield\'s Got Talent', 'released_at' => strtotime('9 Jun 2017')],
    ['title' => 'Little Mustachioed Shit', 'released_at' => strtotime('6 Jun 2014')],
    ['title' => 'The Animals', 'released_at' => strtotime('17 Jun 2016')],
    ['title' => 'Tied to the Tracks', 'released_at' => strtotime('9 Jun 2017')],
    ['title' => 'Tit Punch', 'released_at' => strtotime('11 Jul 2013')],
];


function filterEpisodes(array $episode):bool {
    // kolla om timestampen är samma som 2015
    return date('Y', $episode['released_at']) == '2015';
}
print_r(array_filter($episodes, 'filterEpisodes'));
//Använd array_filter för att filtrera avsnitten som släpptes 2015 in i en ny array
//$episodes2015[] = array_filter($episodes, 'filterEpisodes');
//var_dump($episodes2015);
//skriv ut de filtrerade avsnitten
/* foreach ($episodes2015 as $episode) {
    echo $episode['title'] . ' was released in '.$episode['released_at'];
} */



    