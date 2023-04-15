<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrowthController extends Controller
{
    public function index()
    {
        return view('pages.user.growth.index');
    }

    public function rate()
    {
        return view('pages.user.growth.rate');
    }
}
