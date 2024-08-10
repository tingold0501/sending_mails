<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use App\Models\Contract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContractController extends Controller
{
    public static function get_contract_(){
        $contracts = DB::table('contracts')->get();
        return $contracts;
    }
    public function get_contract(){
        $contracts = ContractController::get_contract_();
        return view('components.table', ['contracts' => $contracts]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('edit-contract');
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
    public function store(StoreContractRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Contract::create($validated);
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract, $id): View
    {
        $contract = DB::table('contracts')->where('id', $id)->first();
        return view('contract.edit', ['contract' => $contract, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContractRequest $request, Contract $contract)
    {
        $validated = $request->validated();
        $contract->update($validated);
        return redirect()->intended(route('table', absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        //
    }
}
