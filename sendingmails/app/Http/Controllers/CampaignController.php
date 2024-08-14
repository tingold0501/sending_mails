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
use App\Http\Requests\StoreCampaignRequest;

class CampaignController extends Controller
{
    public function get_campaign()
    {
        $contracts = ContractController::get_contract_();
        return view('edit-form', ['contracts' => $contracts]);
    }

    public function get_emailtemplate_campaign(): View
    {
        return view('edit-email-template');
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
    public function store(Request $validated): RedirectResponse
    {


        // $validated = $request->validated();
        // dd($request->sendto[]);
        $campaign = new Campaign();
        $campaign->sendto = json_encode($validated['sendto']);
        $campaign->from_name = $validated['from_name'];
        $campaign->email = $validated['email'];
        $campaign->subject = $validated['subject'];
        $campaign->content = $validated['content'];
        $campaign->campaign_name = $validated['campaign_name'];
        $campaign->save();
        return redirect(route('campaign', absolute: false));
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
