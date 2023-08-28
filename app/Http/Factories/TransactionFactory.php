<?php

namespace App\Http\Factories;

use App\Http\Actions\BankTransaction;
use App\Http\Actions\CardTransaction;
use App\Http\Actions\CashTransaction;
use App\Http\Interfaces\Transaction;
use App\Http\Requests\CashMachineRequest;

class TransactionFactory
{

    /**
     * @throws \Exception
     */
    public static function make(
        string $transactionType,
        CashMachineRequest $request
    ): Transaction {
       if ($transactionType === 'cash') {
           return new CashTransaction(
             $request->get('inputs')
           );
       } else if ($transactionType === 'card') {
           return new CardTransaction();
       } else if ($transactionType === 'bank') {
           return new BankTransaction();
       } else {
           throw new \Exception('No available transaction');
       }
    }

}
