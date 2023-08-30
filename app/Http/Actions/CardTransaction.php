<?php

namespace App\Http\Actions;

use App\Http\DTO\CardTransactionData;
use App\Http\Factories\CardTransactionFactory;
use App\Http\Interfaces\Transaction;
use App\Http\Requests\CashMachineRequest;
use App\Models\Transaction as TransactionModel;

class CardTransaction implements Transaction
{
    private const LIMIT = 10000;

    private CardTransactionData $cardTransaction;

    public function __construct(CashMachineRequest $request)
    {
        $this->cardTransaction =  CardTransactionFactory::create($request);
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
            'card_number' =>  $this->cardTransaction->getCardNumber(),
            'expiration_date' =>  $this->cardTransaction->getExpirationDate(),
            'card_holder' =>  $this->cardTransaction->getCardHolder(),
            'cvv' =>  $this->cardTransaction->getCvv(),
            'amount' =>  $this->cardTransaction->getAmount()
       ];
    }
}
