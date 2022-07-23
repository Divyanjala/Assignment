<?php

namespace domain\Fine;

// use Illuminate\Support\Facades\Auth;
use App\Models\Fine;
use Illuminate\Support\Facades\Hash;
/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class FineService
{
    protected $fine;

    public function __construct()
    {
        $this->fine = new Fine();
    }

    /**
     * All fine
     */
    public function all()
    {
        return $this->fine->orderBy('id', 'desc')->get();
    }

        /**
     * get fine
     */
    public function get($id)
    {
        return $this->fine->find($id);
    }
    /**
     * Create fine
     * @param  $request
     */
    public function store($request)
    {
        $data['act'] =  $request->act;
        $data['offence'] =  $request->offence;
        $data['amount'] =  $request->amount;
        $res=$this->fine->create($data);

    }

    public function update($request)
    {
        $this->fine->where('id', $request->id)
        ->update(array('offence'=>$request->offence,'act'=>$request->act,'amount'=>$request->amount));
    }


}
