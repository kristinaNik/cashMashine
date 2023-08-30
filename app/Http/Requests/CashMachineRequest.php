<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CashMachineRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'type' => 'required|string',
            'inputs' => 'required',
            'inputs.card_number' => 'size:16|starts_with:4',
            'inputs.expiration_date' => 'date_format:m/Y|after:today +2 months',
            'inputs.cvv' => 'size:3'
        ];
    }
}
