<?php

namespace App\Http\Controllers;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthorAccessRole extends Controller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check if the user is authenticated
        if(Auth::check()){
            if(Auth::user()->roles === 'admin'){
                return $next($request);
            }
        }
        //If not admin , redirect to home
        //'login' er place a 'home' and welcome view er num name->home debar por path pay ni tai login diye check dilam.
        // return redirect()->route('/')->with('error'.'you are not authorize to access this page');
        
        return redirect()->route('login')->with('error'.'you are not authorize to access this page');
        // return $next($request);
    }
}
