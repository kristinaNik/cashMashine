<?php

namespace App\Http\Factories;

use App\Http\DTO\CashTransactionData;
use App\Http\Requests\CashMachineRequest;

class CashTransactionFactory
{

    /**
     * @param CashMachineRequest $request
     *
     * @return CashTransactionData
     */
    public static function create(CashMachineRequest $request): CashTransactionData
    {
        $data = $request->validationData();

        return new CashTransactionData(
            $data['quantity'],
            $data['inputs']
        );

    }
}
