<?php

namespace App\Http\Resources;

use App\Http\DTO\CashTransactionData;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashTransactionResource
{
    private CashTransactionData $cashTransactionData;

    public function __construct(CashTransactionData $cashTransactionData)
    {
        $this->cashTransactionData = $cashTransactionData;
    }

    public function toArray()
    {

       return [
           'type' => 'cash',
           'quantity' => $this->cashTransactionData->getQuantity(),
           'inputs' => $this->cashTransactionData->getInputs()
       ];
    }

}
