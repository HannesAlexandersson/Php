<?php

declare(strict_types=1);
// 02
/* $quote = '?kaeps uoy nehw ,ekiL ?semitemos flesruoy raeh uoy oD';

$characters = str_split($quote);
print_r($characters); */


//03
/* $quote = '?kaeps uoy nehw ,ekiL ?semitemos flesruoy raeh uoy oD';

$characters = str_split($quote);
$characters = array_reverse($characters);
print_r($characters);  */

//04
$quote = '?kaeps uoy nehw ,ekiL ?semitemos flesruoy raeh uoy oD';

$characters = str_split($quote);
$characters = array_reverse($characters);
$characters = implode($characters);
echo $characters; 

