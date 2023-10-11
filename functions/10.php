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
//$keys[] = array_search($query, $emojis); 
// $arr2[] = array_filter($query);
/*foreach ( $array as $string ) {
        
        if ( strpos( $string, $query ) !== false ) {
            $found[] = $string;
        }
    }
    return $found;*/
function searchEmojis ($query, $array){
    $found = [];
    foreach ( $array as $string => $emoji) {
        
        if ( strpos( $string, $query ) !== false ) {
            $found[] = $emoji;
        }
    }
    return $found;
}

print_r(searchEmojis('thumb', $emojis)); // Array ( [0] => 👎 [1] => 👍 )