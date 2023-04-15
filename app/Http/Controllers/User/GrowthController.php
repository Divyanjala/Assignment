<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use domain\Facades\GrowthFacade;
use domain\Facades\PlantFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrowthController extends Controller
{
    public function index()
    {
        return view('pages.user.growth.index');
    }

    public function rate()
    {
        $response['plants']=PlantFacade::all();
        $response['rates']=GrowthFacade::getGrowth(Auth::user()->id);
        return view('pages.user.growth.rate')->with($response);
    }

    public function store(Request $request)
    {
        GrowthFacade::make($request->all());
        return redirect()->route('user.growth.rate')->with('alert-success', 'Growth Deatils Added Successfully');
    }
}
