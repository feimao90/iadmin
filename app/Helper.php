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
