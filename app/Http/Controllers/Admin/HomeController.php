<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        dd(auth('admin')->user()->roles);

        $obj = app('url');
        dd($obj);
//                dump(\Route::currentRouteName());
//        dump(\Route::getCurrentRequest()->method()) ;
//        dump(\Route::getRoutes());
//        dump(\Route::currentRouteAction());
        return view('test');
    }
}
