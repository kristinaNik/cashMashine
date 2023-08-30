<?php

namespace App\Http\Actions;

use App\Http\DTO\BankTransactionData;
use App\Http\Factories\BankTransferFactory;
use App\Http\Interfaces\Transaction;
use App\Models\Transaction as TransactionModel;
use App\Http\Requests\CashMachineRequest;

class BankTransaction implements Transaction
{
    private const LIMIT = 10000;

    private BankTransactionData $cardTransaction;

    public function __construct(CashMachineRequest $request)
    {
        $this->cardTransaction =  BankTransferFactory::create($request);
    }

    public function validate()
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
