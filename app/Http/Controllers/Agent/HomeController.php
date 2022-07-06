<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends ParentController
{
    public function index()
    {
        return view('pages.agent.index');
    }

}
