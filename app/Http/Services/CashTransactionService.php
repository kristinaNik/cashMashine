<?php

namespace App\Http\Services;

use App\Http\Actions\CashTransaction;
use App\Http\DTO\CashTransactionData;
use App\Http\Interfaces\Transaction;

class CashTransactionService
{
    /**
     * @param array<CashTransactionData> $cashTransaction
     *
     * @return float
     */
    public function getGrandTotal(array $cashTransaction): float
    {
        $total = 0.0;
        foreach ($cashTransaction as $data) {
            $total += $data->getTotal();
        }

        return $total;
    }
}
