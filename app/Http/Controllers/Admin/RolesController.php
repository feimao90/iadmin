<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Services\RolesService;

class RolesController extends Controller
{
    protected $roles;
    public function __construct(RolesService $roles)
    {
        $this->roles = $roles;
    }

    public function index()
    {
        return view('admin.roles.index')->with('roles', $this->roles->all());
    }

    public function store(Request $request)
    {
        $message = '添加失败';
        if ($this->roles->store($request->all())) {
            $message = '添加成功';
        }
        showMessage($message);
        return redirect()->back();
    }

    public function permissions()
    {
        //权限范围包含菜单权限、控制权限
        return view('admin.roles.permissions');
    }

    public function destroy($id)
    {
        $this->roles->destroy($id);
        showMessage('删除成功');
        return redirect()->back();
    }
}
