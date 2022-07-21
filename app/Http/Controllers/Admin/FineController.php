<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FineController extends ParentController
{
    public function index()
    {
       return view('pages.admin.fine.index');
    }
}
