<?php

namespace App\Http\Actions;

use App\Http\Interfaces\Transaction;

class CashTransaction implements Transaction
{

    private const LIMIT = 10000;


    public function validate()
    {
        // TODO: Implement validate() method.
    }

    public function amount()
    {

    }

    public function inputs()
    {
        // TODO: Implement inputs() method.
    }
}
