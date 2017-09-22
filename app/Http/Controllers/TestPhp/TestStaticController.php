<?php

/**
 * Created by PhpStorm.
 * User: huwei
 * Date: 2017/9/22
 * Time: 11:58
 */

namespace App\Http\Controllers\TestPhp;
use App\TestPhpStatic;
use App\Http\Controllers\Controller;

class TestStaticController extends Controller
{
    public function hh()
    {
        $data = new TestPhpStatic();
        //①：$data->par = 'this is static';这是错误写法，不能用对象，访问静态变量
        //②：echo $data->hh(); 对象，可以访问静态方法
        /*echo $data->he();
        echo $data->he();对象，访问静态方法。静态方法中的静态变量始终是同一个*/

    }
}