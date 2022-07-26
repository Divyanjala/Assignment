<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalController extends ParentController
{
    public function index()
    {
        return view('pages.user.medical.index');
    }

    public function new()
    {
        return view('pages.user.medical.new');
    }


    public function create(Request $request)
    {

        FineFacade::store($request);
        return redirect(route('user.medical.list'))->with('alert-success', 'Medical Records create successfully');
    }

    public function edit($id)
    {
        $res['fine'] =  FineFacade::get($id);
        return view('pages.user.medical.edit')->with($res);
    }

    public function update(Request $request)
    {
        FineFacade::update($request);
        return redirect(route('user.medical.list'))->with('alert-success', 'Medical Records update successfully');
    }
}
