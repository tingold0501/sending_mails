<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCampaignRequest;
use App\Mail\CampaignMail;
use App\Models\Campaign;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ContractController;
class CampaignController extends Controller
{
    public function get_campaign(){
        $contracts = ContractController::get_contract_();
        return view('edit-form', ['contracts' => $contracts]);
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
    public function create(): View
    {
        return view('edit-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'sendto' => 'required|email|exists:contracts,email',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        Campaign::create($request->all());
        return redirect( route('campaign', absolute: false) );
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCampaignRequest $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
