<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect(route('login'));
        } else {
            if (Auth::user()->user_role == User::TYPES['ADMIN']) {
                return redirect(route('admin.dashboard'));
            }
            if (Auth::user()->user_role == User::TYPES['POLICE']) {
                return redirect(route('police.dashboard'));
            }
        }
        return $next($request);
    }
}
