<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Models\EmailTemplate;
use App\Models\Variable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmailTemplateController extends Controller
{
    private $sendMail;
    private $inner_join_campaign;
    public function __construct()
    {
        $this->campaigns = CampaignController::get_campaign_();
        $this->contract = ContractController::get_contract_();
        $this->variable = VariableController::get_variables_();
    }

    public function index()
    {
        $this->inner_join_campaign = DB::table('campaigns')
            ->join('email_templates', 'campaigns.id', '=', 'email_templates.campaign_id')
            ->join('users', 'campaigns.user_id', '=', 'users.id')
            ->select('campaigns.*', 'email_templates.*', 'users.*')
            ->get();
        return view('email-template', ['inner_join_campaign' => $this->inner_join_campaign, 'variables' => $this->variable]);
    }

    public static function get_data_campaign_id()
    {
        $inner_join_campaign = DB::table('campaigns')
            ->join('email_templates', 'campaigns.id', '=', 'email_templates.campaign_id')
            ->select('campaigns.*', 'email_templates.*')
            ->get();
        return $inner_join_campaign;
    }

    public static function get_latest_email_template()
    {
        $latest_email_template = DB::table('email_templates')->latest()->first();
        return $latest_email_template;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmailTemplateRequest $request)
    {
        $latest_campaign = CampaignController::get_latest_campaign();
        $email_template = new EmailTemplate();
        $email_template->name = $latest_campaign->from_name;
        $email_template->content = $latest_campaign->subject;
        $email_template->body = $request['body'];
        $email_template->css_text = $request['css_text'];
        $email_template->variable_keys = $request['variable_keys'];
        $email_template->campaign_id = $latest_campaign->id;
        $email_template->created_at = now();
        $email_template->updated_at = now();
        $email_template->save();
        // $variable_keys = VariableController::assign_variables_($request, $email_template);
        $this->sendMail = SendMailController::send_mail($request, $latest_campaign);
        return redirect(route('email-template', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailTemplate $emailTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmailTemplate $emailTemplate)
    {
        //
    }

    public function update_template_user_design(UpdateEmailTemplateRequest $request)
    {
        EmailTemplate::where('active', 1)->update(['body' => $request->body, 'css_text' => $request->css_text]);
        return redirect(route('dashboard', absolute: false));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailTemplateRequest $request, EmailTemplate $emailTemplate)
    {
        $email_template = EmailTemplate::find($request->id);
        $email_template->name = $request->name;
        $email_template->content = $request->subject;
        $email_template->body = $request->body;
        $email_template->css_text = $request->css_text;
        $email_template->variable_keys = $request->variable_keys;
        $email_template->updated_at = now();
        $email_template->save();
        return redirect(route('email-template', absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailTemplate $emailTemplate)
    {
        //
    }
}
