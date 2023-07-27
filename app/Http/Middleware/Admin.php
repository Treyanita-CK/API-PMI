<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
      if (Auth::check()) {
        $role_id = Auth::user()->role_id;

        if($role_id === 1) {
          return $next($request);
        }
      }
      return response()->json(['error' => 'Forbidden'],500);
    } 
}
