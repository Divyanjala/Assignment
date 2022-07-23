<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\UserFacade;

class UserController extends Controller
{
    public function publicUsers()
    {
        $res['users'] = UserFacade::all();
       return view('pages.police.public_users.index')->with($res);
    }

    public function policeUsers()
    {
       return view('pages.police.police_users.index');
    }
}
