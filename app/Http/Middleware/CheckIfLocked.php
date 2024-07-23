<?php

// app/Http/Middleware/CheckIfLocked.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckIfLocked
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Session::has('locked') && Session::get('locked') === true) {
            return redirect()->route('lock-screen');
        }

        return $next($request);
    }
}
