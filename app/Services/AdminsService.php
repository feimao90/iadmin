<?php
/**
 * Created by PhpStorm.
 * User: carl
 * Date: 2017/3/29
 * Time: 上午9:37
 */

namespace Services;


class AdminsService extends ServiceAbstract
{
    public function model()
    {
        return \App\Models\SysAdmins::class;
    }

    public function all()
    {

    }

    /**
     * 添加管理员
     * @param array $attributes
     * @return bool
     */
    public function store(array $attributes)
    {
        $password = bcrypt($attributes['password']);
        $result = $this->model->create([
            'email'     => $attributes['email'],
            'nickname'  => $attributes['nickname'],
            'password'  => $password,
            'active'    => $attributes['active']
        ]);

        return $result ? true : false;
    }

}