<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'numeric', 'unique:user_details'],
            'licence_number' => ['required', 'string', 'max:100', 'unique:user_details'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user_details = UserDetail::create([
            'mobile' => $request->mobile,
            'licence_number' => $request->licence_number,
            'user_id' => $user->id,
            'address' => $request->address
        ]);

        event(new Registered($user));

        Auth::login($user);
        if (Auth::user()->user_role == User::TYPES['USER']) {
            return redirect(route('user.dashboard'));
        }

        if (Auth::user()->user_role == User::TYPES['POLICE']) {
            return redirect(route('police.dashboard'));
        }

        if (Auth::user()->user_role == User::TYPES['ADMIN']) {
            return redirect(route('admin.dashboard'));
        }
        // return redirect(RouteServiceProvider::HOME);
    }
}
