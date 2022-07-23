<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Disapamok\Modules\SriLanka;

class PoliceController extends ParentController
{
    public function index()
    {
       return view('pages.admin.police.index');
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
}
