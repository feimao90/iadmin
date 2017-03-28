<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysRoles extends Model
{
    protected $table = 'sys_roles';

    public function perm()
    {
        return $this->belongsToMany('App\Models\SysPermissions', 'sys_roles_permissions', 'roles_id', 'permissions_id');
    }

    public function menu()
    {
        return $this->belongsToMany('App\Models\SysMenus', 'sys_roles_menus', 'roles_id', 'menus_id');
    }
}
