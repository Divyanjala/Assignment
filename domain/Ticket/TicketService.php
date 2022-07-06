<?php

namespace domain\Ticket;

// use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class TicketService
{
    protected $contact;

    public function __construct()
    {
        $this->ticket = new Ticket();
    }

    /**
     * All ticket
     */
    public function all()
    {
        return $this->ticket->all();
    }

        /**
     * All ticket for agent id
     */
    public function getAll($id)
    {
        return $this->ticket->where('agent_id', $id)->get();
    }

    /**
     * get ticket
     */
    public function get($id)
    {
        return $this->ticket->find($id);
    }

        /**
     * get by code ticket
     */
    public function getByCode($code)
    {
        return $this->ticket->where('ref_number', $code)->first();
    }

    /**
     * Create ticket
     * @param  $request
     */
    public function store($request)
    {

        $data['cus_name'] =  $request['cus_name'];
        $data['pro_description'] =  $request['pro_description'];
        $data['email'] =  $request['email'];
        $data['phone_number'] =  $request['phone_number'];
        $data['agent_id'] =  $request['agent_id'];

        $res=$this->ticket->create($data);
        //generate code
        $rescode=$res->id+9999;
        $ref_number = str_pad($rescode + 1, 8, "0", STR_PAD_LEFT);
        $ref_number=$ref_number.'#S#'.($res->id*15*11);
        $this->ticket->where('id', $res->id)
        //end generate code

        ->update(array('ref_number' => $ref_number));
        return $this->get($res->id);
    }

      /**
     * update ticket
     * @param  $request
     */
    public function update($id,$data)
    {
        return $this->ticket->where('id', $id)
        ->update($data);
    }
}
