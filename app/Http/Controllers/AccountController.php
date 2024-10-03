<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules
        ]);

        Account::create($request->all());
        return redirect()->route('accounts.index');
    }

    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }

    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, Account $account)
    {
        $request->validate([
            // Add validation rules
        ]);

        $account->update($request->all());
        return redirect()->route('accounts.index');
    }

    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('accounts.index');
    }
}
