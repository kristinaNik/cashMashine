<?php

namespace App\Http\Factories;

use App\Http\Interfaces\Transaction;
use App\Http\Requests\CashMachineRequest;

class TransactionFactory
{

    /**
     * @param string $type
     * @param CashMachineRequest $request
     *
     * @return Transaction
     */
    public static function make(
        string $type,
        CashMachineRequest $request
    ): Transaction {
         return new $type($request);
    }
}
