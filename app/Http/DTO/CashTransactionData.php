<?php

namespace App\Http\DTO;

class CashTransactionData
{

    private int $quantity;

    private string $banknote;

    private string $type;

    private float $total;

    public function __construct(
        int $quantity,
        string $banknote,
        string $type,
        float $total
    ) {
        $this->quantity = $quantity;
        $this->banknote = $banknote;
        $this->type = $type;
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

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }
}
