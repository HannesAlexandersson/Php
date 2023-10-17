<?php
declare(strict_types=1);

$actors = [
    'Abigail Savage',
    'Dascha Polanco',
    'Jackie Cruz',
    'Kimiko Glenn',
    'Taylor Schilling',
    'Uzo Aduba',
];
// stripos är caseinsensitive till skillnad från strpos som är känslig för små och stora bokstäver
$actors = array_filter($actors, function ($actor) {
    if (stripos($actor,"p") !== false){
        return true;
    }});
    
    var_dump($actors);