<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\FineFacade;
use domain\Facades\PoliceFacade;

class FineController extends Controller
{
    public function index()
    {
        $res['fines'] =  FineFacade::allUserFines();
       return view('pages.police.fines.index')->with($res);
    }

    public function new()
    {
       $res['fines'] =  FineFacade::all();
       $res['police'] =  PoliceFacade::allPolice();
       return view('pages.police.fines.new')->with($res);
    }

    public function create(Request $request)
    {
        FineFacade::storeUserFine($request);
        return redirect(route('police.fine.list'))->with('alert-success', 'User Fine create successfully');
    }

    public function edit($id)
    {
        $res['fines'] =  FineFacade::all();
       $res['police'] =  PoliceFacade::allPolice();
        $res['fine'] =  FineFacade::getUserFine($id);
        return view('pages.police.fines.edit')->with($res);
    }

    public function update(Request $request)
    {
        FineFacade::updateUserFine($request);
        return redirect(route('police.fine.list'))->with('alert-success', 'User Fine update successfully');
    }
}
