<?php
/**
 * Created by PhpStorm.
 * User: carl
 * Date: 2017/3/21
 * Time: 下午2:37
 */

namespace Services;


class MenuService extends ServiceAbstract
{
    public $dataTree;

    public function model()
    {
        // TODO: Implement model() method.
        return 'App\Models\SysMenus';
    }

    public function getMenus()
    {
        $list = $this->model->get();
        $this->dataTree = $this->getTree($list->toArray());
        $html = $this->getHtml($this->dataTree);
        return $html;
    }

    public function getTree($data, $pid=0)
    {
        $tree = [];
        $html = '';
        foreach ($data as $row) {
            if ($row['pid'] == $pid) {
                $child = $this->getTree($data, $row['id']);
                if ($child) {
                    $row['child'] = $child;
                }
                $tree[] = $row;
            }
        }
        return $tree;
    }

    public function getHtml($trees, $child=false)
    {
        $html = '';
        foreach ($trees as $tree) {
            if (empty($tree['child'])) {
                if ($child) {
                    $html .= '<dd><a href="' . url($tree['uri']) . '"><cite> ' . $tree['name'] . ' </cite></a></dd>';
                } else {
                    $html .='<li class="layui-nav-item"><a href="'.$tree['uri'].'"><cite>'.$tree['name'].'</cite></a></li>';
                }
            } else {
                $html .= '<li class="layui-nav-item layui-nav-itemed"><a href="javascript:;"><cite>'.$tree['name'].'</cite></a>';
                $html .= $this->getHtml($tree['child'], true);
                $html .= '</li>';
            }
        }
        if ($child) {
            return '<dl class="layui-nav-child">' . $html . '</dl>';
        } else {
            return '<ul class="layui-nav layui-nav-tree beg-navbar">' . $html . '<span class="layui-nav-bar"></span></ul>';
        }
    }

    public function getCheckBox($trees)
    {

    }
}