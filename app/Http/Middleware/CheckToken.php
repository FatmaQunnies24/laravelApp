<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session('api_token')) {
            dd('No token found, redirecting to login'); 
            return redirect()->route('signIn');
        }
    
        return $next($request);
    }

  
     protected function isValidToken($token)
     {
         try {
             $user = Auth::guard('sanctum')->user();
             if ($user) {
                 return true; 
             }
         } catch (\Exception $e) {
         }
 
         return false; 
     }
 
}