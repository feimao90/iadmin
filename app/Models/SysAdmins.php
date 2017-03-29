<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysAdmins extends Model
{
    protected $table = 'sys_admins';

    protected $fillable = ['email', 'nickname', 'active', 'password'];

    public function roles()
    {
        return $this->belongsToMany('App\Models\SysRoles', 'sys_roles_admins', 'admins_id', 'roles_id');
    }
}
