<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use domain\Facades\GrowthFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthController extends Controller
{
    public function index()
    {
        return view('pages.user.health.index');
    }

    public function shedule()
    {
        $response['plans']=GrowthFacade::allPlane(Auth::user()->id);
        return view('pages.user.health.new')->with($response);
    }

    public function store(Request $request)
    {
        GrowthFacade::makeHealth($request->all());
        return redirect()->route('user.health.shedule')->with('alert-success', 'Health plan Added Successfully');
    }
}
