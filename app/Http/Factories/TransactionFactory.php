<?php

namespace App\Http\Factories;

use App\Http\Interfaces\Transaction;
use App\Http\Requests\CashMachineRequest;

class TransactionFactory
{
    public static function make(
        string $type,
        CashMachineRequest $request
    ): Transaction {
         return new $type($request);
    }
}
