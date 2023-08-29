<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Actions\CashTransaction;
use App\Http\Factories\CashTransactionFactory;
use App\Http\Repositories\TransactionRepository;
use App\Http\Requests\CashMachineRequest;
use App\Http\Resources\CashTransactionResource;
use App\Models\Transaction;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * @param CashMachineRequest $request
     * @param TransactionRepository $transactionRepository
     * @return CashTransactionResource|\Illuminate\Http\JsonResponse
     */
    public function store(
        CashMachineRequest $request,
        TransactionRepository $transactionRepository
    ) {
       $cashTransaction = CashTransactionFactory::create($request);
       $cashTransactionAction = new CashTransaction($cashTransaction);

       if ($cashTransactionAction->validate()) {
           $transaction = $transactionRepository->store($cashTransactionAction);
       } else {
            return response()->json(['message' => 'Limit reached'], 422);
        }

        return new CashTransactionResource($transaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
