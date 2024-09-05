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
use App\Mail\MailConfiguring;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CampaignController extends Controller
{
    public function __construct()
    {
        if (!Auth::check()) {
            return;
        }
    }

    public static function get_campaign_()
    {
        $campaigns = DB::table('campaigns')->get();
        return $campaigns;
    }
    public function get_campaign()
    {
        $campaigns = $this->get_campaign_();
        $contracts = ContractController::get_contract_();
        return view('components.campaign.start', ['campaigns' => $campaigns, 'contracts' => $contracts]);
    }

    public function get_emailtemplate_campaign(): View
    {
        return view('edit-email-template');
    }

    public static function get_latest_campaign()
    {
        $latest_campaign = DB::table('campaigns')->latest()->first();
        return $latest_campaign;
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
    public static function sendingmails(StoreCampaignRequest $request)
    {
        $mailDataCampaign = [
            'from_name' => $request['from_name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'content' => $request['content'],
        ];
        $data = $request->all();
        foreach ($data['sendto'] as $key => $value) {
            Mail::to($value)->send(new CampaignMail($mailDataCampaign));
        }
    }

    public function store(StoreCampaignRequest $request): RedirectResponse
    {
        $campaign = new Campaign();
        $campaign->sendto = json_encode($request['sendto']);
        $campaign->from_name = $request['from_name'];
        $campaign->from_email = $request['from_email'];
        $campaign->subject = $request['subject'];
        $campaign->text = $request['text'];
        $campaign->user_id = Auth::user()->id;
        $campaign->created_at = now();
        $campaign->updated_at = now();
        $campaign->save();
        return redirect(route('campaign', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign) {}

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
