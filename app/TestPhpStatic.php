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
    public  $ooo;
    public  $qq;
    public  $vv;
    public  $rr;
    private $lll;

    public function __construct()
    {
        $this->lll = 1;
    }

    public function oo()
    {
        return $this->lll;
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


    //当序列化，类的时候。会调用此方法
    public function __sleep()
    {
        // TODO: Implement __sleep() method.
        //return array('ooo','qq','vv','rr','hhh','lll');//除了，静态属性以外。其他三种可见性的成员变量都可以
        return array('ooo');//
    }

    //当，将类想字符串一般，调用的时候会调用此方法
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return '哈哈哈，老子是个类';
    }

    //当，像调用普通方法一样，使用对象时
    public function __invoke($x)
    {
        // TODO: Implement __invoke() method.
        return 'this is'.($x+$x);
    }

    //测试 __call
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }

    public function __get($name)
    {
        return $this->{$name};
        //return $name;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->{$name} = $value;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        echo "克隆的时候，会调用我";
    }

}