<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeReportController extends Controller
{
    public function index(){

        $response['results'] = DB::select('SELECT p.`name`,p.price,sum(oi.qty) as qty, sum(p.price*oi.qty) as amount
                         FROM payments pay
                                INNER JOIN orders o on o.id=pay.order_id
                                INNER JOIN order_items  oi on oi.order_id=o.id
                                INNER JOIN products p on p.id= oi.product_id
                                GROUP BY product_id');
        return view('pages.admin.incomereports.index')->with($response);

    }
}
