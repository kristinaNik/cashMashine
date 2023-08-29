<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use \App\Http\Interfaces\Transaction as TransactionInterface;
use App\Http\Actions\CashTransaction;
use App\Http\Factories\CashTransactionFactory;
use App\Http\Factories\TransactionFactory;
use App\Http\Interfaces\TransactionRequestInterface;
use App\Http\Repositories\TransactionRepository;
use App\Http\Requests\CashMachineRequest;
use App\Http\Resources\CashTransactionResource;
use App\Models\Transaction;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CashMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();

        return view('home')->with('transactions', $transactions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CashMachineRequest $request
     * @param TransactionRepository $transactionRepository
     * @return CashTransactionResource|\Illuminate\Http\JsonResponse
     */
    public function store(
        CashMachineRequest $request,
        TransactionRepository $transactionRepository
    ) {
        $cashTransactionAction =  TransactionFactory::make(CashTransaction::class, $request);

       if ($cashTransactionAction->validate()) {
           $transaction = $transactionRepository->store($cashTransactionAction);
       } else {
            return response()->json(['message' => 'Limit reached'], 422);
        }

        return new CashTransactionResource($transaction);
    }
}
