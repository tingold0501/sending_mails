<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    protected $campaigns;
    protected $emailTemplate;
    protected $user;
    protected $contract;
    protected $contractStatus;
    protected $variable;
    // protected function __construct()
    // {
    //     if (!Auth::check()) {
    //         return;
    //     }
    //     $this->user = Auth::user();
    //     $this->campaigns = CampaignController::get_campaign_();
    //     $this->contract = ContractController::get_contract_();
    //     $this->contractStatus = ConTractstatusController::get_contract_status_();
    // }

}
