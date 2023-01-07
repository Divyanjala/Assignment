<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\EmployeeFacade;
use domain\Facades\InventoryItemFacade;
use domain\Facades\ProductFacade;
use domain\Facades\TaskFacade;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        $response['tasks']=TaskFacade::all();
        $response['employees']=EmployeeFacade::all();
        return view('pages.admin.task.index')->with($response);
    }

    public function new($id)
    {
        $response['materials']=InventoryItemFacade::all();
        $response['tasks']=TaskFacade::allByOrder($id);
        $response['store_id']=$id;
        return view('pages.admin.task.new')->with($response);
    }

    public function store(Request $request)
    {
        TaskFacade::make($request->all());
        return redirect()->back()->with('alert-success', 'Item Added Successfully');;
    }

    public function assign(Request $request)
    {
        TaskFacade::assign($request->all());
        return redirect()->back()->with('alert-success', 'Task Assigned Successfully');;
    }

    public function complete(Request $request)
    {
        TaskFacade::complete($request->all());
        return redirect()->back()->with('alert-success', 'Task Completed Successfully');;
    }
}
