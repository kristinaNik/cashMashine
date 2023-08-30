<?php

namespace App\Http\Factories;

use App\Http\DTO\BankTransactionData;
use App\Http\Requests\CashMachineRequest;

class BankTransferFactory
{

    public static function create(CashMachineRequest $request): BankTransactionData
    {
        $data = $request->validationData()['inputs'];

        return new BankTransactionData(
            $data['transfer_date'],
            $data['customer_name'],
            $data['account_number'],
            $data['amount']
        );
    }
}
