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
     * All ticket
     */
    public function all()
    {
        return $this->user->all();
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
        $this->police->create($newdata);
    }


}
