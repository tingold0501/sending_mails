<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\StoreListMRequest;
use App\Http\Requests\UpdateListMRequest;
use App\Models\ContractStatus;
use App\Models\ListM;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ListController extends Controller
{
   
    public static function get_list_contract_() {
        $listContract = DB::table('list_contracts')->get();
        return $listContract;
    }
    public function get_v_list_all_contracts() {
        $this->listContract = ListController::get_list_contract_();
        return view('layouts.contract.list.list-contract',['listContract' => $this->listContract]);
    }
    public function get_v_create_list_contracts() {
        return view('layouts.contract.list.create-list-contract');
    }

    
    public function get_v_add_contract_to_list($id, $name) {
        $this->listContract = ListController::get_list_contract_();
        $this->contractStatus = ConTractstatusController::get_contract_status_();
        return view('layouts.contract.list.create-list-contract-with-id',['listContract' => $this->listContract,'contractStatus' => $this->contractStatus,'id' => $id,'name' => $name]);
    }
 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(StoreListMRequest $request)
    {
        $listM = new ListM();
        $listM->name = $request['name'];
        $listM->created_at = now();
        $listM->updated_at = now();
        $listM->save();
        return redirect()->intended(route('get_v_list_all_contracts', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(ListM $listM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListM $listM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListMRequest $request, ListM $listM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListM $listM)
    {
        //
    }
}
