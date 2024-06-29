<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthPsikolog
{   
   public function handle(Request $request, Closure $next)
   {
      if (!session()->has('loggedPsikolog') && $request->path() != '/') {        
         return redirect('/login')->with('fail', 'Silahkan Login atau Daftar Terlebih Dahulu');                    
      }

      if (session()->has('loggedPsikolog') && $request->path() == '/') {
         return redirect('/')->with('logged', 'Anda Sudah Login');
      }
      return $next($request);
   }
}