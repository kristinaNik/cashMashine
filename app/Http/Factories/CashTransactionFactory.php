<?php

namespace App\Http\Factories;

use App\Http\DTO\CashTransactionData;
use App\Http\Requests\CashMachineRequest;

class CashTransactionFactory
{

    /**
     * @param CashMachineRequest $request
     *
     * @return array
     */
    public static function create(CashMachineRequest $request): array
    {
        $data = $request->validationData();

        $cashTransaction = [];

        foreach ($data['inputs'] as $inputs) {
            $total = $inputs['quantity'] * $inputs['banknote'];

            $cashTransaction[] = new CashTransactionData(
                $inputs['quantity'],
                $inputs['banknote'],
                $total
            );
        }

        return $cashTransaction;
    }
}
