<?php

namespace App\Http\Factories;

use App\Http\DTO\CardTransactionData;
use App\Http\Requests\CashMachineRequest;

class CardTransactionFactory
{
    public static function create(CashMachineRequest $request): CardTransactionData
    {
        $data = $request->validationData()['inputs'];

        return new CardTransactionData(
                $data['card_number'],
                $data['expiration_date'],
                $data['card_holder'],
                $data['cvv'],
                $data['amount']
            );
    }

}
