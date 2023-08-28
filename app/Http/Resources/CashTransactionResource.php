<?php

namespace App\Http\Resources;

use App\Http\DTO\CashTransactionData;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashTransactionResource
{
    private array $cashTransactionData;

    public function __construct(array $cashTransactionData)
    {
        $this->cashTransactionData = $cashTransactionData;
    }

    public function toArray()
    {
        $result = [];

        /** @var CashTransactionData $items */
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
