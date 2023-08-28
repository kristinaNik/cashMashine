<?php

namespace App\Http\Actions;

use App\Http\DTO\CashTransactionData;
use App\Http\Interfaces\Transaction;

class CashTransaction implements Transaction
{
    private array $cashTransactionData;

    public function __construct(array $cashTransactionData)
    {
        $this->cashTransactionData = $cashTransactionData;
    }

    private const LIMIT = 10000;


    public function validate()
    {
        if ($this->cashTransactionData->getTotal() > self::LIMIT) {
            return false;
        }

        return true;
    }

    public function amount()
    {

    }

    public function inputs()
    {
        // TODO: Implement inputs() method.
    }
}
