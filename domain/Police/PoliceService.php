<?php

namespace domain\Police;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PoliceDetail;
use Illuminate\Support\Facades\Hash;
/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class PoliceService
{
    protected $police;
    protected $user;

    public function __construct()
    {
        $this->user = new User();
        $this->police = new PoliceDetail();
    }

    /**
     * All police
     */
    public function all()
    {
        return $this->police->orderBy('id', 'desc')->get();
    }

        /**
     * get police
     */
    public function get($id)
    {
        return $this->police->find($id);
    }
    /**
     * Create police
     * @param  $request
     */
    public function store($request)
    {
        $data['name'] =  $request->name;
        $data['password'] = Hash::make($request->password);
        $data['email'] =  $request['email'];
        $data['user_role'] =  1;
        $res=$this->user->create($data);

        $newdata['user_id']=$res->id;
        $newdata['province'] =  $request['province'];
        $newdata['district'] =  $request['district'];
        $newdata['division'] =  $request['division'];
        $newdata['address'] =  $request['address'];
        $newdata['phone'] =  $request['phone'];
        $pol=$this->police->create($newdata);

        $rescode='POL'.$pol->id.'#';
        $this->police->where('id', $pol->id)
        ->update(array('ref_number' => $rescode));
    }

    public function update($request)
    {

        $this->user->where('id', $request->user_id)
        ->update(array('name'=>$request->name));

        $this->police->where('id', $request->id)
        ->update(array('province'=>$request['province'],
                    'district'=>$request['district'],
                    'division'=>$request['division'],
                    'address'=>$request['address'],
                    'phone'=>$request['phone']
                ));
    }


}
