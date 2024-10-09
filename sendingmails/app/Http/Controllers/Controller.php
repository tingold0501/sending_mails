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
}
