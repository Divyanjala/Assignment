<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\TicketFacade;
use Illuminate\Support\Facades\Auth;
use App\Events\ReplyEvent;

class TicketController extends ParentController
{
    /**
     * All ticket
     */
    public function tickets()
    {
        $res['tickets'] = TicketFacade::getAll(Auth::user()->id);
        return view('pages.police.tickets.index')->with($res);
    }
    /**
     * Get ticket
     */
    public function getTicket(Request $request)
    {
        TicketFacade::update($request->id,['open_status'=>1]);
        return TicketFacade::get($request->id);
    }
    /**
     * Store reply
     */
    public function reply(Request $request)
    {
        TicketFacade::update($request->id,['status'=>2,'reply'=>$request->reply]);
        $ticket=TicketFacade::get($request->id);
        event(new ReplyEvent($ticket));
        return redirect(route('police.ticket.all'))->with('alert-success', 'Reply message sent successfully');
    }
}
