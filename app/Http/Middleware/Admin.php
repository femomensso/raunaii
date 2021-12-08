<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $administrators = [
            'femomensso@gmail.com',
        ];

        if (!in_array((auth()->user()?->email), $administrators))
        {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
