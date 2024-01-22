<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Bank\InvalidNameException;
use App\Bank\HormoneMonster;

try {
    $monster = new HormoneMonster('Coach Steve');
} catch (InvalidNameException $exception) {
    echo $exception->getMessage();
}