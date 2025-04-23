<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session()->has('admin_logged_in')) {
            // Optionally, you might want to also verify the user's role
            // by retrieving them from the database based on some stored identifier in the session
            // and checking their 'role' attribute.
            return $next($request);
        }

        return redirect()->route('admin.login'); // Or abort(403) if you prefer
    }
}