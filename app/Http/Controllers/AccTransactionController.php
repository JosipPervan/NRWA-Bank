<?php

namespace App\Http\Controllers;

use App\Models\AccTransaction;
use Illuminate\Http\Request;

class AccTransactionController extends Controller
{
    public function index()
    {
        $transactions = AccTransaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules
        ]);

        AccTransaction::create($request->all());
        return redirect()->route('transactions.index');
    }

    public function show(AccTransaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    public function edit(AccTransaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, AccTransaction $transaction)
    {
        $request->validate([
            // Add validation rules
        ]);

        $transaction->update($request->all());
        return redirect()->route('transactions.index');
    }

    public function destroy(AccTransaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
