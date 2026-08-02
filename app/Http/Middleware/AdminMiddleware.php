<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (! $user || ! $user->is_admin) {
            // If this is the first time the user hits an admin page in this session,
            // show a friendly informational page. Subsequent attempts redirect home.
            if (! $request->session()->pull('admin_denied_seen', false)) {
                $request->session()->put('admin_denied_seen', true);
                return response()->view('admin.denied', [], 403);
            }

            return redirect('/')->with('error', 'You must be an administrator to access that area.');
        }

        return $next($request);
    }
}
