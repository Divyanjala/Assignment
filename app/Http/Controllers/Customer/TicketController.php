<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\TicketFacade;
use domain\Facades\UserFacade;
use App\Events\TicketCreateEvent;

class TicketController extends Controller
{
    public function new()
    {
        $res['agents'] = UserFacade::all();
        return view('pages.customer.tickets.new')->with($res);
    }

    public function store(Request $request)
    {
        $res = TicketFacade::store($request);
        // event(new TicketCreateEvent($res));
        if ($res) {
            $msg='The ticket was successful and the reference number is '.$res->ref_number;
            return redirect(route('customer.ticket.new'))->with('alert-success', $msg);
        } else {
            return redirect(route('customer.ticket.new'))->with('alert-danger', 'Something Went Wrong, Please Try Again Later');
        }
    }

    public function getTicket(Request $request)
    {
        $res= TicketFacade::getByCode($request->code);
        if ($res) {
           return $res;
        }else
        return 'false';
    }
}
