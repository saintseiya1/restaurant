<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\Role as Ro;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ... $roles)
    {
        $user = Auth::user();

        foreach($roles as $role) {
            $ro = Ro::where('title', $role)->first();

            if($user->roles->contains($ro)) {
                return $next($request);
            } else {
                return redirect('/admin');
            }            

        }
        dd($roles);
        if(!Auth::check()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
