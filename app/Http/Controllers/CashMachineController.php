<?php

namespace App\Http\Controllers;

use App\Http\Actions\CardTransaction;
use App\Http\Actions\CashTransaction;
use App\Http\Factories\CashTransactionFactory;
use App\Http\Requests\CashMachineRequest;
use App\Http\Resources\CashTransactionResource;
use App\Http\Services\CashTransactionService;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CashMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(CashMachineRequest $request)
    {
       $cashTransaction = CashTransactionFactory::create($request);
       $resource = new CashTransactionResource($cashTransaction);
       $cashTransactionService = new CashTransactionService();

       $transaction = new Transaction();
       $transaction->total_amount = $cashTransactionService->getGrandTotal($cashTransaction);
       $transaction->inputs = json_encode($resource->toArray());

       $transaction->save();
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
