<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends ParentController
{
    /**
     * Home
     */
    public function index()
    {
        return view('pages.police.dashboard');
    }

}
