<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleReportController extends Controller
{
    public function getAvailableSpaces(){

        $response['results'] = DB::select('SELECT u.`name`,u.space,u.use_space,(u.space-u.use_space) as available from tasks t
                                    INNER JOIN employees e on e.id=t.emp_id
                                    right JOIN units u on u.id=e.unit_id
                                    GROUP BY u.id');
        return view('pages.admin.reports.availablesapace')->with($response);

    }
}
