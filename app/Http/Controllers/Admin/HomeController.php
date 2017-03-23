<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
//                dump(\Route::currentRouteName());
//        dump(\Route::getCurrentRequest()->method()) ;
//        dump(\Route::getRoutes());
//        dump(\Route::currentRouteAction());
        return view('test');
    }
}
