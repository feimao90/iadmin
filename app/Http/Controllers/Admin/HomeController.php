<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $result = \Auth::guard('admin')->user()->canMenus('Admin.PermissionsController');
        dd($result);

        $user = app(\Services\AdminsService::class)->findById(15);
        //$result = $user->canMenus('Admin.PermissionsController');
        dd('aa');
        //$user->hasPermissions();
        //$res = Cache::tags('sys_roles')->get('entrust_roles_for_user_id');
        //dd($res);
//        $obj = app('url');
//        dd($obj);
//                dump(\Route::currentRouteName());
//        dump(\Route::getCurrentRequest()->method()) ;
//        dump(\Route::getRoutes());
//        dump(\Route::currentRouteAction());
        return view('admin.home');
    }
}
