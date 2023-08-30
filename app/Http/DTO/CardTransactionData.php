<?php

namespace App\Http\DTO;

class CardTransactionData
{
    private string $cardNumber;
    private string $expirationDate;
    private string $cardHolder;
    private int $cvv;
    private float $amount;

    public function __construct(
        string $cardNumber,
        string $expirationDate,
        string $cardHolder,
        int $cvv,
        float $amount
    ) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cardHolder = $cardHolder;
        $this->cvv = $cvv;
        $this->amount = $amount;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    public function getCardHolder(): string
    {
        return $this->cardHolder;
    }

    public function getCvv(): int
    {
        return $this->cvv;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
