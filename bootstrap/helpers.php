<?php
/**
 * 这里是公共辅助函数库
 * @return string
 */


function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
