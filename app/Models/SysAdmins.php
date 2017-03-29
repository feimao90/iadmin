<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysAdmins extends Model
{
    protected $table = 'sys_admins';

    protected $fillable = ['email', 'nickname', 'active', 'password'];
}
