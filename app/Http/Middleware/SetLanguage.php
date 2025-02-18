<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    /**
     * use Illuminate\Support\Facades\Session;
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$localeLanguage = \Session::get('languageName');
        $localeLanguage =  \App::setLocale('pt');

//        if (! isset($localeLanguage)) {
//            \App::setLocale('pt');
//        } else {
//            \App::setLocale($localeLanguage);
//        }

        return $next($request);
    }
}
