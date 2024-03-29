<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    public function index()
    {
        return view('pages.user.diseases.index');
    }

    public function plant()
    {
        return view('pages.user.diseases.plant');
    }
    
    public function fish()
    {
        return view('pages.user.diseases.fish');
    }
}
