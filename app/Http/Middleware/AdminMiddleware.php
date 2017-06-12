<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if($user == null){
            return redirect()->route('user.signin');
        }
        elseif($user->email != "stevkovskigor@hotmail.com"){
            return redirect()->route('product.index');
        }
        return $next($request);
    }
}
