<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\FineFacade;
use Illuminate\Support\Facades\Auth;

class FineController extends ParentController
{
    public function index()
    {
        $res['fines'] =  FineFacade::getUserFines(Auth::user()->user->licence_number);
        return view('pages.user.fines.index')->with($res);
    }
}
