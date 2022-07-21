<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FineController extends ParentController
{
    public function index()
    {
        return view('pages.user.fines.index');
    }
}
