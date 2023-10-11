<?php

$emojis = [
    'joy' => '😂',
    'rage' => '😡',
    'scream' => '😱',
    'shit' => '💩',
    'smirk' => '😏',
    'sunglasses' => '😎',
    'thumbsdown' => '👎',
    'thumbsup' => '👍',
    'unicorn' => '🦄',
];


function getRandomEmoji ($arr){
    $key = array_rand($arr,1);
    echo $arr[$key];
};
getRandomEmoji($emojis);
