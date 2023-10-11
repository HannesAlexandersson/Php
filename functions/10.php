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
   $arr2 = [];
   foreach ( $array as $key => $value){
        if (preg_grep('/'.$query.'(\w+)/',$array)){
            $arr2 = $value;
        }
    }
    

return $arr2;
}

print_r(searchEmojis('thumb', $emojis)); // Array ( [0] => 👎 [1] => 👍 )