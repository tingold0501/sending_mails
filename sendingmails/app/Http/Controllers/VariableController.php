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

    private function __construct()
    {
        if (!Auth::check()) {
            abort(403);
        }
    }

    public static function assignVariables($email_template){
        $variable = new Variable();
        $variable->email_template_id = $email_template->id;
        if(isset($email_template->variable_keys)){
            $variable->key = $email_template->variable_keys;
        }
        $variable->save();
    }

    public static function get_variables_(){
        $variables = DB::table('variables')->get();
        return $variables;
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
