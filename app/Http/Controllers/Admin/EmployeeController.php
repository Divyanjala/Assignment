<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\EmployeeFacade;
use Illuminate\Http\Request;

class EmployeeController extends ParentController
{
    public function index()
    {
        $response['employees']=EmployeeFacade::all();
       return view('pages.admin.employee.index')->with($response);
    }
    public function new()
    {
       return view('pages.admin.employee.new');
    }
       /**
     * Store a newly created customer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EmployeeFacade::make($request->all());
        return redirect()->route('admin.employee')->with('alert-success', 'Employee Added Successfully');;
    }

        /**
     * Check the validate of given email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateEmail(Request $request)
    {
        return EmployeeFacade::validateEmail($request);

    }
}
