<?php

namespace App\Http\DTO;

class CashTransactionData
{

    private int $quantity;
    private string $banknote;
    private float $total;

    public function __construct(
        int $quantity,
        string $banknote,
        float $total
    ) {
        $this->quantity = $quantity;
        $this->banknote = $banknote;
        $this->total = $total;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getBanknote(): string
    {
        return $this->banknote;
    }

    public function getTotal(): float
    {
        return $this->total;
    }
}
