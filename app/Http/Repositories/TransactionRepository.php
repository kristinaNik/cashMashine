<?php

namespace App\Http\Repositories;

use App\Http\Actions\CashTransaction;
use App\Models\Transaction;

class TransactionRepository
{

    /**
     * @param CashTransaction $cashTransactionAction
     *
     * @return Transaction
     */
    public function store(CashTransaction $cashTransactionAction): Transaction
    {
        $transaction = new Transaction();
        $transaction->total_amount = $cashTransactionAction->amount();
        $transaction->inputs = json_encode($cashTransactionAction->inputs());

        $transaction->save();

        return $transaction;
    }
}
