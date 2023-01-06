<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\UserFacade;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $response['users']=UserFacade::all();
       return view('pages.admin.users.index')->with($response);
    }
    public function new()
    {
       return view('pages.admin.users.new');
    }

    public function store(Request $request)
    {
       
        UserFacade::make($request->all());
        return redirect()->route('admin.user')->with('alert-success', 'User Added Successfully');;
    }

         /**
     * Check the validate of given email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateEmail(Request $request)
    {
        return UserFacade::validateEmail($request);

    }
}
