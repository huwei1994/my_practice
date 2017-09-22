<?php
/**
 * Created by PhpStorm.
 * User: huwei
 * Date: 2017/9/22
 * Time: 11:57
 */

namespace App;

class TestPhpStatic
{
    static $par;

    protected $hhh;

    public function __construct()
    {

    }

    //静态方法
    public static function hh()
    {
        return 'object can use static function';
    }

    //静态方法，使用静态变量
    public static function he()
    {
        $a = self::$par;
        self::$par++;
        return $a;
    }
}