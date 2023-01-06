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
      $response['monthEarn']=PaymentFacade::paymentMonthly();
      $response['annualEarn']=PaymentFacade::paymentAnnualy();
      $response['tasks']=TaskFacade::taskPercentage();
      $response['pending_tasks']=TaskFacade::taskPending();
      return view('pages.admin.dashboard')->with($response);
   }

   public function department()
   {
      $response['departments']=TaskFacade::departments();
      return view('pages.admin.department.index')->with($response);
   }
}
