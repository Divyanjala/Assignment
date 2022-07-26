<?php

namespace domain\User;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDetail;
use App\Events\ReplyEvent;
/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class UserService
{
    protected $user_details;
    protected $user;

    public function __construct()
    {
        $this->user = new User();
        $this->user_details = new UserDetail();
    }

    /**
     * All user
     */
    public function all()
    {
        return $this->user->where('user_role',0)->orderBy('id', 'desc')->get();
    }
    /**
     * get user
     */
    public function get($id)
    {
        return $this->user->find($id);
    }


  /**
     * get user
     */
    public function getUser($id)
    {
        return $this->user_details->where('licence_number',$id)->first();
    }

    public function checkUserFine()
    {
        $data=['email'=>'kasun19961201@gmail.com','date'=>1];
          event(new ReplyEvent($data));
    }

}
