<?php

namespace App\Http\Interfaces;

use App\Http\Interfaces\Transaction as TransactionInterface;
use App\Models\Transaction;

interface TransactionRepository
{
    /**
     * @param TransactionInterface $transactionAction
     *
     * @return Transaction
     */
    public function store(TransactionInterface $transactionAction): Transaction;
}
