<?php

namespace App\Http\Actions;

use App\Http\Factories\CashTransactionFactory;
use App\Http\Interfaces\Transaction;
use App\Http\Requests\CashMachineRequest;
use \App\Models\Transaction as TransactionModel;

class CashTransaction implements Transaction
{
    private const LIMIT = 10000;

    private CashMachineRequest $request;

    private array $cashTransaction;

    public function __construct(CashMachineRequest $request)
    {
        $this->request = $request;
        $this->cashTransaction =  CashTransactionFactory::create($this->request);
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        $sumTotal = TransactionModel::query()->sum('total_amount');

        if ($this->amount() > self::LIMIT || $sumTotal > self::LIMIT) {
            return false;
        }

        return true;
    }

    /**
     * @return float
     */
    public function amount(): float
    {
        $total = 0.0;

        foreach ($this->cashTransaction as $transaction) {
            $total += $transaction->getTotal();
        }

        return $total;
    }

    /**
     * @return array
     */
    public function inputs(): array
    {
        $result = [];

        foreach ($this->cashTransaction as $transaction) {
            $result[] = [
                'type' => 'cash',
                'quantity' => $transaction->getQuantity(),
                'banknote' => $transaction->getBanknote()
            ];
        }

        return $result;
    }
}
