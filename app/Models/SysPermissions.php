<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysPermissions extends Model
{
    //
    protected $table = 'sys_permissions';

    protected $fillable = ['name', 'display_name', 'pid', 'sort'];
}
