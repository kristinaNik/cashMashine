<?php

namespace App\Http\Actions;

use App\Http\Interfaces\Transaction;

class CashTransaction implements Transaction
{

    private const LIMIT = 10000;

    private string $inputs;

    public function __construct(string $inputs)
    {
        $this->inputs = $inputs;
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }

    public function amount()
    {
        // TODO: Implement amount() method.
    }

    public function inputs()
    {
        // TODO: Implement inputs() method.
    }
}
