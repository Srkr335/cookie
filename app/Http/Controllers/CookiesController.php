<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CookiesController extends Controller
{
    public function setCookie()
            {
        //if (!request()->hasCookie('cookie_consent')){

           // return response(view('welcome'))->withCookie('cookie_consent', Str::uuid(), 1);
                    //}
        //return view('welcome');




       $response = response('Hello Cookie');
       $response->withCookie('cookie_consent', Str::uuid(), 1);
       return $response;
    }

    public function getCookie(Request $request)
    {
       return request()->cookie('cookie_consent');
    }

    public function delCookie()
    {
        return response('deleted')->cookie('cookie_consent', null, -1);
    }
}
