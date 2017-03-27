<?php
/**
 * Created by PhpStorm.
 * User: carl
 * Date: 2017/3/24
 * Time: 下午3:48
 */

/**
 * 显示提示信息
 * @param $message
 * @param string $redirectTo
 * @param int $timeTo
 */
function showMessage($message, $redirectTo='', $timeTo=3000) {
    \Session::flash('flashMessage', $message);
    \Session::flash('timeTo', $timeTo);
    if ($redirectTo) {
        \Session::flash('redirectTo', $redirectTo);
    }
}

/**
 * 获取不带有child的数组结构
 * @param $data
 * @param int $pid
 * @param int $lev
 * @return array
 */
function getSubTree(&$data , $pid = 0 , $lev = 1) {
    static $son = array();
    foreach($data as $key => $value) {
        if($value['pid'] == $pid) {
            $value['lev'] = $lev;
            $son[] = $value;
            unset($data[$key]);
            getSubTree($data , $value['id'] , $lev+1);
        }
    }
    return $son;
}
