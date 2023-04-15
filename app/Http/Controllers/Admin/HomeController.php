<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\PaymentFacade;
use domain\Facades\TaskFacade;
use Illuminate\Http\Request;

class HomeController extends ParentController
{
   public function index()
   {
    //   $response['monthEarn']=PaymentFacade::paymentMonthly();
    //   $response['annualEarn']=PaymentFacade::paymentAnnualy();
    //   $response['chartdata']=PaymentFacade::chartdata();
    //   $response['tasks']=TaskFacade::taskPercentage();
    //   $response['pending_tasks']=TaskFacade::taskPending();
    //   return view('pages.admin.dashboard')->with($response);
    return view('pages.admin.dashboard');

   }

//    public function department()
//    {
//       $response['departments']=TaskFacade::departments();
//       return view('pages.admin.department.index')->with($response);
//    }

//    public function units()
//    {
//       $response['units']=TaskFacade::units();
//       return view('pages.admin.units.index')->with($response);
//    }

//    public function new()
//    {
//       $response['departments']=TaskFacade::departments();
//       return view('pages.admin.units.new')->with($response);
//    }
//       /**
//     * Store a newly created customer in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//         TaskFacade::makeUnit($request->all());
//        return redirect()->route('admin.units')->with('alert-success', 'Workshop Added Successfully');;
//    }
}
