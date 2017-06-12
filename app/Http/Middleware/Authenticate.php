<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                Session::put('oldUrl',$request->url());//za ako doagja od /checkout (koe ne ni e dozvoleno) linkot da se zacuva i
                                                        // koga ke se najavi da se odnese na istoto url, a difoltno ke ne odnese
                                                        //kako sto sme namestile vo postSignin() vo UserControlerot

                //return redirect()->guest('login');
                return redirect()->route('user.signin');
            }
        }

        return $next($request);
    }
}
