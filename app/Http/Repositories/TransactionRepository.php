<?php

namespace App\Http\Repositories;

use App\Models\Transaction;
use \App\Http\Interfaces\Transaction as TransactionInterface;

class TransactionRepository
{
    /**
     * @param TransactionInterface $transactionAction
     *
     * @return Transaction
     */
    public function store(TransactionInterface $transactionAction): Transaction
    {
        $transaction = new Transaction();
        $transaction->total_amount = $transactionAction->amount();
        $transaction->inputs = json_encode($transactionAction->inputs());

        $transaction->save();

        return $transaction;
    }
}
