<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use App\Models\Contract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContractController extends Controller
{
    private $contract_statues;
    public function __construct()
    {
        if (!Auth::check()) {
            return;
        }
        $this->contract_statues = ConTractstatusController::get_contract_status_();
        $this->contract = ContractController::get_contract_();
        $this->listContract = ListController::get_list_contract_();
    }

    public function get_v_segment() {
        return view('layouts.contract.segment.segment-contract');
    }

    public function get_v_segment_all_contracts() {
        return view('layouts.contract.segment.segment-all-contract', ['contracts' => $this->contract]);
    }
    
    public static function get_contract_(){
        $contracts = DB::table('contracts')->where('user_id', Auth::user()->id)->get();
        return $contracts;
    }
    public function get_tables(){
        $contracts = ContractController::get_contract_();
        $campaigns = CampaignController::get_campaign_();
        return view('components.table', ['contracts' => $contracts, 'campaigns' => $campaigns, 'contract_statues' => $this->contract_statues]);
    }
    public function add_contract_to_list_with_id(StoreContractRequest $request,$id) {
        $contract = new Contract();
        $contract->email = $request['email'];
        $contract->first_name = $request['first_name'];
        $contract->last_name = $request['last_name'];
        $contract->contract_statue_id = $request['contract_statue_id'];
        $contract->list_contract_id = $id;
        $contract->user_id = Auth::user()->id;
        $contract->save();
        return redirect()->intended(route('get_v_list_all_contracts', absolute: false));
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $contracts = DB::table('contracts')->where('user_id', Auth::user()->id)->latest()->paginate(5);
        $listContract = ListController::get_list_contract_();
        return view('layouts.contract.table-contract', ['listContract' => $listContract,'contract_statues' => $this->contract_statues, 'contracts' => $contracts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function get_contract_store(){
        return view('layouts.contract.create-contract', ['contract_statues' => $this->contract_statues,'listContract' => $this->listContract]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContractRequest $request)
    {
        // dd($request);
        $contract = new Contract();
        $contract->email = $request['email'];
        $contract->first_name = $request['first_name'];
        $contract->last_name = $request['last_name'];
        $contract->contract_statue_id = $request['contract_statue_id'];
        $contract->list_contract_id = $request['list_contract_id'];
        $contract->user_id = Auth::user()->id;
        $contract->save();
        // return response()->json($contract);
        return redirect()->intended(route('contract', absolute: false));
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
