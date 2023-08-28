<?php

declare(strict_types=1);

namespace App\Http\Interfaces;

interface Transaction
{
    /**
     * Validate Inputs
     */
    public function validate();

    /**
     * Return total amount*/
    public function amount();

    /**
     * Return Inputs
     */
    public function inputs();
}
