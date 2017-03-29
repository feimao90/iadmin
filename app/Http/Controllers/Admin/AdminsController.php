<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminsStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Services\RolesService;

class AdminsController extends Controller
{
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
        dd($data);
    }
}
