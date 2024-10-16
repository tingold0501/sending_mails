<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Mail\MailConfiguring;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public static function send_mail(StoreEmailTemplateRequest $request,$latest_campaign ){
        $mail_configuring_data = [
            'content' => $latest_campaign->subject,
            'css_text' => $request['css_text'],
            'body' => $request['body'],
        ];
        $sendToData = json_decode($latest_campaign->sendto, true);
        foreach ($sendToData as $key => $value) {
            Mail::to($value)->send(new MailConfiguring($mail_configuring_data));
        }
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
    public function store(StoreEmailTemplateRequest $request)
    {
        //
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

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailTemplateRequest $request, EmailTemplate $emailTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailTemplate $emailTemplate)
    {
        //
    }
}
