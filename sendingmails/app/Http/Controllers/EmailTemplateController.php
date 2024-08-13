<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\DB;
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
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
