<?php

namespace domain\Fine;

// use Illuminate\Support\Facades\Auth;
use App\Models\Fine;
use App\Models\UserFine;
use Illuminate\Support\Facades\Hash;
/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class FineService
{
    protected $fine;
    protected $user_fine;

    public function __construct()
    {
        $this->fine = new Fine();
        $this->user_fine = new UserFine();
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

    /**
     * Create user fine
     * @param  $request
     */
    public function storeUserFine($request)
    {
        $data['licence_number'] =  $request->licence_number;
        $data['fine_id'] =  $request->fine_id;
        $data['police_id'] =  $request->police_id;
        $data['date'] =  $request->date;

        $fine=$this->get($request->fine_id);

        $data['amount'] =  $fine->amount;
        $data['expire_date'] =  $request->date;
        $res=$this->user_fine->create($data);

    }


}
