<?php

$average = getAverage(10, 0);
function getAverage($a, $b){
    $key = ($a + $b) / 2;
    return $key;
}
echo $average; // 5