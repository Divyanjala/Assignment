<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\TicketFacade;
use Illuminate\Support\Facades\Auth;
use App\Events\ReplyEvent;

class TicketController extends ParentController
{

    public function tickets()
    {
        $res['tickets'] = TicketFacade::getAll(Auth::user()->id);
        return view('pages.agent.tickets.index')->with($res);
    }

    public function getTicket(Request $request)
    {
        TicketFacade::update($request->id,['open_status'=>1]);
        return TicketFacade::get($request->id);
    }

    public function reply(Request $request)
    {
        TicketFacade::update($request->id,['status'=>2,'reply'=>$request->reply]);
        $ticket=TicketFacade::get($request->id);
        event(new ReplyEvent($ticket));
        return redirect(route('agent.ticket.all'))->with('alert-success', 'Reply message sent successfully');
    }
}
