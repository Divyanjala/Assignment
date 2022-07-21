<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function publicUsers()
    {
       return view('pages.police.public_users.index');
    }

    public function policeUsers()
    {
       return view('pages.police.police_users.index');
    }
}
