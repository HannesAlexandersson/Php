<?php

declare(strict_types=1);


function diffInYears(int $timestamp): int
{
    $currentYear = 2018;
    $diffYear = date("Y", $timestamp);
    return $currentYear - $diffYear;
}
 
