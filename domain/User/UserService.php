<?php

namespace domain\User;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserFine;
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
    protected $user_fine;

    public function __construct()
    {
        $this->user = new User();
        $this->user_details = new UserDetail();
        $this->user_fine = new UserFine();
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

        /**
     * All allPendingFine
     */
    public function allPendingFine()
    {
        return $this->user_fine->where('status',0)->get();
    }

    public function checkUserFine()
    {
        $fines=$this->allPendingFine();
        foreach ($fines as $key => $fine) {

            if ($fine->expire_date==date('Y-m-d')) {
                event(new ReplyEvent($fine));
            }
        }


    }

}
