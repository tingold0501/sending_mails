<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Models\EmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ImageEmailTemplateController extends Controller
{

    public function sendEmail(Request $request)
{
    $template = $request->input('email_template'); // Template chứa HTML của email
    $images = $request->input('images'); // Các đường dẫn hoặc id của hình ảnh đã lưu

    foreach ($images as $imagePath) {
        // Lấy nội dung hình ảnh từ đường dẫn
        $imageData = Storage::disk('public')->get($imagePath);
        // Mã hóa hình ảnh thành base64
        $base64Image = 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . base64_encode($imageData);
        // Thay thế đường dẫn hình ảnh trong template bằng base64
        $template = str_replace($imagePath, $base64Image, $template);
    }

    // // Sau đó, gửi email với template đã được thay thế hình ảnh base64
    // Mail::send([], [], function ($message) use ($template) {
    //     $message->to('recipient@example.com')
    //             ->subject('Your Subject')
    //             ->setBody($template, 'text/html'); // Gửi email dưới dạng HTML
    // });

    return response()->json(['message' => 'Email sent successfully']);
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
