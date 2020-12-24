<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        If(!$user->isAdmin()){
            session()->flash('warning', 'У вас не має прав адміністратора');
            return redirect()->route('index');
        }

        return $next($request);
    }
}
