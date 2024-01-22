<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Bank\Account;

try {
    $bankAccount = new Account(300400500, 0);
    $bankAccount->add(50);
    $bankAccount->withdraw(100);
} catch (Exception $exception) {
    echo $exception->getMessage();
}