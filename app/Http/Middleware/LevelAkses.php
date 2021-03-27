<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LevelAkses
{
    public function handle(Request $request, Closure $next)
    {
        $users = session('data_login');

        if (!$users) {
            return redirect('/administrator')->with('silahkan login terlebih dahulu.');
        }
        return $next($request);
    }
}
