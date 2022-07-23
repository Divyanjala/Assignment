<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\PoliceFacade;
use Disapamok\Modules\SriLanka;
use Illuminate\Validation\Rules;

class PoliceController extends ParentController
{
    public function index()
    {
        $res['stations'] = PoliceFacade::all();
        return view('pages.admin.police.index')->with($res);
    }

    public function new()
    {
        $res['provinces'] = SriLanka::getProvinces(); // Returns all provinces
        return view('pages.admin.police.new')->with($res);
    }

    public function getDistrict(Request $request)
    {
        return SriLanka::getDiscricts($request->pro);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'province' => ['required', 'string', 'max:100'],
            'district' => ['required', 'string', 'max:100'],
            'division' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        PoliceFacade::store($request);
        return redirect(route('admin.police.all'))->with('alert-success', 'Police station create successfully');
    }

    public function edit($id)
    {
        $res['provinces'] = SriLanka::getProvinces(); // Returns all provinces
        $res['police'] =  PoliceFacade::get($id);
        $res['districts'] =SriLanka::getDiscricts($res['police']->province);
        return view('pages.admin.police.edit')->with($res);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric'],
            'province' => ['required', 'string', 'max:100'],
            'district' => ['required', 'string', 'max:100'],
            'division' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        PoliceFacade::update($request);
        return redirect(route('admin.police.all'))->with('alert-success', 'Police station update successfully');
    }
}
