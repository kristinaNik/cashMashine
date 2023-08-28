<?php

namespace App\Http\DTO;

class CashTransactionData
{

    private int $quantity;

    private string $inputs;

    public function __construct(int $quantity, string $inputs)
    {
        $this->quantity = $quantity;
        $this->inputs = $inputs;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getInputs(): string
    {
        return $this->inputs;
    }
}
