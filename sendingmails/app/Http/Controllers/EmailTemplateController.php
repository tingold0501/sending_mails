<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Mail\MailConfiguring;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View as View;

class EmailTemplateController extends Controller
{
    public static function get_gallery(){
        $gallery_templates = DB::table('email_templates')->get();
        return $gallery_templates;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery_templates = EmailTemplateController::get_gallery();
        return view('v-gallery', ['gallery_templates' => $gallery_templates]);
    }

    public function get_email_template_user_design(): View
    {
        return view('edit-campaign-template');
    }

    public function get_data_campaign_id(){
        $inner_join_campaign = DB::table('campaigns')
        ->join('email_templates', 'campaigns.id', '=', 'email_templates.campaign_id')
        ->select('campaigns.*')
        ->get();
        return $inner_join_campaign;
    }


    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    public static  function get_email_template_with_user(StoreCampaignRequest $request)
    {
        $email_template = DB::table('email_templates')->latest()->first();
        $latest_campaign = CampaignController::get_latest_campaign();
        $data = $request->all();
        foreach ($data['sendto'] as $key => $value) {
            Mail::to($value)->send(new MailConfiguring($email_template));
        }
    }

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
        $email_template->save();
        return redirect(route('dashboard', absolute: false));
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

    public function update_template_user_design(UpdateEmailTemplateRequest $request){
        EmailTemplate::where('active', 1)->update(['body' => $request->body, 'css_text' => $request->css_text]);
        return redirect(route('dashboard', absolute: false));
    }
        

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailTemplateRequest $request, EmailTemplate $emailTemplate)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailTemplate $emailTemplate)
    {
        //
    }
}
