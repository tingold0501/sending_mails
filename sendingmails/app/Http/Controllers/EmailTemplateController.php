<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Mail\MailConfiguring;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View as View;

class EmailTemplateController extends Controller
{
    private $sendMail;
    public function __construct()
    {
        $this->campaigns = CampaignController::get_campaign_();
        $this->contract = ContractController::get_contract_();
    }

    public function index()
    {
        return view('email-template',[ 'contracts' => $this->contract, 'campaigns' => $this->campaigns]);
    }

    public static function get_data_campaign_id()
    {
        $inner_join_campaign = DB::table('campaigns')
            ->join('email_templates', 'campaigns.id', '=', 'email_templates.campaign_id')
            ->select('campaigns.*', 'email_templates.*')
            ->get();
        return $inner_join_campaign;
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
        $email_template->campaign_id = $latest_campaign->id;
        $email_template->created_at = now();
        $email_template->updated_at = now();

        // $variables = json_decode($request['variables'], true);
        // dd($variables);

        $this->sendMail = SendMailController::send_mail($request, $latest_campaign);
        $email_template->save();
        return redirect(route('email-template', absolute: false));
    }

    function assignValuesToVariables($variables, $values) {
        foreach ($variables as $key => $variable) {
            if (isset($values[$key])) {
                $variables[$key] = $values[$key];
            }
        }
        return $variables;
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
    public function update(UpdateEmailTemplateRequest $request, EmailTemplate $emailTemplate) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailTemplate $emailTemplate)
    {
        //
    }
}
