<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAuthLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Jenssegers\Agent\Facades\Agent;

class HomeController extends Controller
{
    public function index(Request $request)
    {
//        // 获取浏览器版本
//        $browser = Agent::browser();
//        $version1 = Agent::version($browser);
//
//
//        // 获取系统版本
//        $platform = Agent::platform();
//        $version2 = Agent::version($platform);
//        $request->setTrustedProxies(array('10.32.0.1/16'));
//        dd($request->getClientIp(), $browser.'-'.$version1, $platform.'-'.$version2, Agent::getUserAgent());

        return view('admin.home.home');
    }

    /**
     * 历史登录
     * @param $id
     */
    public function loginHistory($id)
    {
        $histories = AdminAuthLog::where('admins_id', $id)->orderBy('id', 'desc')->paginate(30);
        return view('admin.home.loginHistory')->withHistories($histories);
    }
}
