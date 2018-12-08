<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }


//    protected function unauthenticated($request, AuthenticationException $exception)
//    {
//        if ($request->expectsJson()) {
//            return response()->json(['error' => 'Unauthenticated.'], 401);
//        }
//
//        $guard = array_get($exception->guards(), 0);
//
//        switch ($guard) {
//            case 'admin':
//                $login = 'admin.login';
//                break;
//
//            default:
//                $login = 'login';
//                break;
//        }
//        return redirect()->guest(route($login));
//    }
}
