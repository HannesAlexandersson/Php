<?php

declare(strict_types=1);

namespace App\Bank;

use Exception;

class Account
{
    public function __construct(
        public int $number,
        private int $money
    ) {
    }

    public function add(int $money): void
    {
        $this->money += $money;
    }

    public function withdraw(int $amountToWithdraw): int
    {
        if ($this->money - $amountToWithdraw < 0) {
            throw new Exception(
                sprintf('The bank account [%d] only have [%d] kronor left to withdraw.', $this->number, $this->money)
            );
        }

        $this->money -= $amountToWithdraw;

        return $amountToWithdraw;
    }
}