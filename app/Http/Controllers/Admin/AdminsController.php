<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminsStoreRequest;
use App\Http\Controllers\Controller;
use Services\AdminsService;
use Services\RolesService;

class AdminsController extends Controller
{
    protected $admin;

    public function __construct(AdminsService $admin)
    {
        $this->admin = $admin;
    }

    public function index()
    {
        return view('admin.admins.index');
    }

    public function create(RolesService $role)
    {
        return view('admin.admins.create')->withRoles($role->all());
    }

    public function store(AdminsStoreRequest $request)
    {

        $data = $request->all();
        $status = 0;
        if ($this->admin->store($data)) {
            $status = 1;
        }
        return response()->json(['status'=>$status]);
    }
}
