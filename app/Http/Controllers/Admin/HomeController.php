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
        return view('admin.home.home');
    }

    /**
     * 历史登录
     * @param $id
     */
    public function loginHistory($id)
    {
        if ($id != \Auth::guard('admin')->user()->id) {
            abort(403, '没有权限访问当前资源');
        }
        $histories = AdminAuthLog::where('admins_id', $id)->orderBy('id', 'desc')->paginate(30);
        return view('admin.home.loginHistory')->withHistories($histories);
    }
}
