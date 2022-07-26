<?php

namespace App\Http\Controllers\User;
use domain\Facades\MedicalFacade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalController extends ParentController
{
    public function index()
    {
         return view('pages.user.medical.new');
    }

    public function new()
    {
        return view('pages.user.medical.new');
    }


    public function create(Request $request)
    {

        MedicalFacade::store($request);
        return redirect(route('user.medical.list'))->with('alert-success', 'Medical Records create successfully');
    }


    public function update(Request $request)
    {
        MedicalFacade::update($request);
        return redirect(route('user.medical.list'))->with('alert-success', 'Medical Records update successfully');
    }
}
