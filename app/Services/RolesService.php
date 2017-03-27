<?php
/**
 * Created by PhpStorm.
 * User: carl
 * Date: 2017/3/27
 * Time: 上午9:04
 */

namespace Services;


class RolesService extends ServiceAbstract
{
    public function model()
    {
        return \App\Models\SysRoles::class;
    }

    public function all($column = ['*'])
    {
        return $this->model->get($column);
    }

    public function store(array $attributes)
    {
        $this->model->name = $attributes['name'];
        $result = $this->model->save();
        return $result;
    }

    public function destroy($id)
    {
        $role = $this->model->findOrFail($id);
        return $role->delete();
    }
}