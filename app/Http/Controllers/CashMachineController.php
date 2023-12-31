<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Actions\BankTransaction;
use App\Http\Actions\CardTransaction;
use App\Http\Actions\CashTransaction;
use App\Http\Factories\TransactionFactory;
use App\Http\Repositories\TransactionRepository;
use App\Http\Requests\CashMachineRequest;
use App\Http\Resources\CashTransactionResource;
use App\Models\Transaction;

class CashMachineController extends Controller
{
    private const GRAND_LIMIT = 20000;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        $sumTotal = Transaction::query()->sum('total_amount');

        return view('home')->with([
            'transactions' => $transactions,
            'sumTotal' => $sumTotal,
        ]);
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
        $sumTotal = Transaction::query()->sum('total_amount');

        if ($sumTotal >= self::GRAND_LIMIT && $sumTotal <= self::GRAND_LIMIT) {
            return response()->json([
                'message' => sprintf('%s %d','You have reached the overall limit of ', self::GRAND_LIMIT)
            ], 422);
        }

        if ($request->type === 'cash') {
            $transactionAction = TransactionFactory::make(CashTransaction::class, $request);
        } else if ($request->type === 'bank') {
            $transactionAction = TransactionFactory::make(BankTransaction::class, $request);
        }  else if ($request->type === 'card') {
            $transactionAction = TransactionFactory::make(CardTransaction::class, $request);
        } else {
            return response()->json(['message' => 'No such type'], 422);
        }

       if ($transactionAction->validate()) {
           $transaction = $transactionRepository->store($transactionAction);
       } else {
            return response()->json(['message' => 'Transaction limit reached'], 422);
        }

        return new CashTransactionResource($transaction);
    }
}
