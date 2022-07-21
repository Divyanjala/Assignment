<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FineController extends Controller
{
    public function index()
    {
       return view('pages.police.fines.index');
    }

    public function new()
    {
       return view('pages.police.fines.new');
    }
}
