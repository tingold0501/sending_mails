<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{

    public function showTemplate(Request $request, $templateName)
    {
        $jsonContent = Storage::get('templates.json');
        
        $templates = json_decode($jsonContent, true);
        
        if (!isset($templates[$templateName])) {
            abort(404, 'Template not found');
        }

        $htmlContent = $templates[$templateName];

        return view('template', ['htmlContent' => $htmlContent]);
    }
}
