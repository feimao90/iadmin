<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenusController extends Controller
{
    //
    public function index()
    {
        return view('admin.menus.index');
    }

    public function show()
    {

        $route = \Route::currentRouteAction();

        list($controller, $action) = explode('@', $route);
        $controller = str_replace(app_path(), '', $controller);
        //dump($controller, $action);
        return view('admin.menus.show');
    }

    public function test()
    {
        return view('admin.menus.show');
    }
}
