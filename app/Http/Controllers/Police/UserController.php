<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\UserFacade;
use domain\Facades\PoliceFacade;

class UserController extends Controller
{
    public function publicUsers()
    {
        $res['users'] = UserFacade::all();
       return view('pages.police.public_users.index')->with($res);
    }

    public function policeUsers()
    {
       $res['users'] = PoliceFacade::allPolice();
       return view('pages.police.police_users.index')->with($res);
    }

    public function policeUsersNew()
    {
        return view('pages.police.police_users.new');
    }


    public function policeUsersCreate(Request $request)
    {
        $request->validate([
            'nic' => ['required', 'unique:police_users'],
        ]);
        PoliceFacade::policeUserStore($request);
        return redirect(route('police.police-users.list'))->with('alert-success', 'Police User create successfully');
    }

    public function policeUsersEdit($id)
    {
        $res['police'] =  PoliceFacade::getPolice($id);
        return view('pages.police.police_users.edit')->with($res);
    }

    public function policeUsersUpdate(Request $request)
    {
        PoliceFacade::policeUserUpdate($request);
        return redirect(route('police.police-users.list'))->with('alert-success', 'Fine update successfully');
    }
}
