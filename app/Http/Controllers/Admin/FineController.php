<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\FineFacade;

class FineController extends ParentController
{
    public function index()
    {
       $res['fines'] = FineFacade::all();
       return view('pages.admin.fine.index')->with($res);
    }

    public function new()
    {
        return view('pages.admin.fine.new');
    }


    public function create(Request $request)
    {

        FineFacade::store($request);
        return redirect(route('admin.fine.all'))->with('alert-success', 'Fine create successfully');
    }

    public function edit($id)
    {
        $res['fine'] =  FineFacade::get($id);
        return view('pages.admin.fine.edit')->with($res);
    }

    public function update(Request $request)
    {
        FineFacade::update($request);
        return redirect(route('admin.fine.all'))->with('alert-success', 'Fine update successfully');
    }
}
