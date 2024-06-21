<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{

    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->type == 'user') {
            return redirect('/');
        }

        return $next($request);
    }
}
