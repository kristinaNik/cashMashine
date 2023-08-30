<?php

namespace App\Http\Actions;

use App\Http\DTO\BankTransactionData;
use App\Http\Factories\BankTransferFactory;
use App\Http\Interfaces\Transaction;
use App\Http\Requests\CashMachineRequest;
use App\Models\Transaction as TransactionModel;

class BankTransaction implements Transaction
{
    private BankTransactionData $cardTransaction;

    public function __construct(CashMachineRequest $request)
    {
        $this->cardTransaction =  BankTransferFactory::create($request);
    }

    public function validate()
    {
        return true;
    }

    /**
     * @return float
     */
    public function amount(): float
    {
        return $this->cardTransaction->getAmount();
    }

    public function inputs()
    {
        return [
            'transfer_date' =>  $this->cardTransaction->getTransferDate(),
            'customer_name' =>  $this->cardTransaction->getCustomerName(),
            'account_number' =>  $this->cardTransaction->getAccountNumber(),
            'amount' =>  $this->cardTransaction->getAmount()
        ];
    }
}
