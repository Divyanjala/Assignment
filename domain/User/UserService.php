<?php

namespace domain\User;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class UserService
{

    protected $user;

    public function __construct()
    {
        $this->user = new User();

    }

    /**
     * All user
     */
    public function all()
    {
        return $this->user->orderBy('id', 'desc')->get();
    }
    /**
     * get user
     */
    public function get($id)
    {
        return $this->user->find($id);
    }

    public function make($data)
    {

        $user = $this->user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_role' => $data['user_role']
        ]);

        return  $user;
    }

               /**
     * Validate Email user
     *
     * @param Edit $edit
     * @param Email $email
     * @return mixed
     */
    public function validateEmail($request)
    {
        if ($request->get('email')) {
            $email = $request->get('email');
            $data = $this->user->where('email', $email)->count();
            if ($data > 0) {
                return 0;
            } else {
                return 1;
            }
        }
    }
}
