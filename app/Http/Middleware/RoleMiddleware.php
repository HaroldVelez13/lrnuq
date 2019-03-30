<?php

namespace App\Http\Middleware;

use Closure;
use Spatie\Permission\Models\Role;

class RoleMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            return redirect('/');
        }

        return $next($request);
    }

}