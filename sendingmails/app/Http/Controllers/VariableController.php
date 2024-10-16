<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\StoreVariableRequest;
use App\Http\Requests\UpdateVariableRequest;
use App\Models\Variable;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class VariableController extends Controller
{
    private $inner_join_email_template;
    private function __construct()
    {
        if (!Auth::check()) {
            abort(403);
        }
    }

    public static function assign_variables_(StoreEmailTemplateRequest $request, $email_template) {
        $template_latest = EmailTemplateController::get_latest_email_template();
        $variable_data = VariableController::get_variables_();
        foreach ($variable_data as $variable) {
            $template_latest->variable_keys = str_replace($variable->key, $request[$variable->key], $template_latest->variable_keys);
            // dd($template_latest->variable_keys);
        }
        $email_template->body = $template_latest->variable_keys;
        // dd($email_template);
    }
    public static function get_variables_(){
        $variables = DB::table('variables')->get();
        return $variables;
    }

    public static function get_latest_variable(){
        $latest_variable = DB::table('variables')->latest()->first();
        return $latest_variable;
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
    public function store(StoreVariableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Variable $variable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Variable $variable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVariableRequest $request, Variable $variable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variable $variable)
    {
        //
    }
}
