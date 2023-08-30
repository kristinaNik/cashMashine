<?php

namespace App\Http\DTO;

class BankTransactionData
{
    private string $transferDate;
    private string $customerName;
    private string $accountNumber;
    private float $amount;

    public function __construct(string $transferDate, string $customerName, string $accountNumber, float $amount)
    {
        $this->transferDate = $transferDate;
        $this->customerName = $customerName;
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
    }

    public function getTransferDate(): string
    {
        return $this->transferDate;
    }

    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
