<?php

namespace App\Http\Actions;

use App\Http\DTO\CashTransactionData;
use App\Http\Interfaces\Transaction;
use \App\Models\Transaction as TransactionModel;

class CashTransaction implements Transaction
{
    private const LIMIT = 10000;

    private array $cashTransactionData;

    /**
     * @param array<CashTransactionData> $cashTransactionData
     */
    public function __construct(array $cashTransactionData)
    {
        $this->cashTransactionData = $cashTransactionData;
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

        foreach ($this->cashTransactionData as $data) {
            $total += $data->getTotal();
        }

        return $total;
    }

    /**
     * @return array
     */
    public function inputs(): array
    {
        $result = [];

        foreach ($this->cashTransactionData as $items) {
            $result[] = [
                'type' => 'cash',
                'quantity' => $items->getQuantity(),
                'banknote' => $items->getBanknote()
            ];
        }

        return $result;
    }
}
