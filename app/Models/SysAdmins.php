<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SysAdmins extends Authenticatable
{
    protected $table = 'sys_admins';

    protected $fillable = ['email', 'nickname', 'active', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function roles()
    {
        return $this->belongsToMany('App\Models\SysRoles', 'sys_roles_admins', 'admins_id', 'roles_id');
    }
}
