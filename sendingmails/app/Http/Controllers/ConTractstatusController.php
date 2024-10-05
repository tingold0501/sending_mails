<?php

namespace App\Http\Controllers;

use App\Models\ContractStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConTractstatusController extends Controller
{
    public static function get_contract_status_(){
        $contract_status = DB::table('contract_statues')->get();
        return $contract_status;
    }
    public function get_contract_status(){
        $contract_status = ConTractstatusController::get_contract_status_();
        return view('edit-contract', ['contract_status' => $contract_status]);
    }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContractStatus $contractStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContractStatus $contractStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContractStatus $contractStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContractStatus $contractStatus)
    {
        //
    }
}
