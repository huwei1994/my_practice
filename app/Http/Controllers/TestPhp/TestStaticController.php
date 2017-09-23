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
        echo $data->oo();//对象可以，通过类方法去使用,private属性

    }

    //测试，魔术方法
    public function moshu()
    {
        $a = new TestPhpStatic();
        /*$a->ooo = 1;
        $a->qq = 2;
        $data = unserialize(serialize($a));
        dump($data);*/


        //测试__toString
        //echo $a;

        //测试 __invoke
        //echo $a(5);

        //测试__call
        //$a->hhhhhhhhhh('q,w,e,r,t,t');

        //测试__callStatic
        //$a::hhhhhhhhhhh('q,w,e,r,t,t');

        //测试 __get
        //$a->pp = 21323123;先，赋值。在使用
        //echo  $a->pp;

        //测试对象复制
        /*$a->qq = 2;
        $b = $a;//浅复制（相当于 引用传值，$b修改了$b中的 qq属性值，$a中的qq属性值也会跟着改变）
        $b->qq = 5434534;
        dump($a);
        dump($b);*/

        //测试对象深复制
        /*$a->qq = 2;
        并且克隆的时候，，会调用__clone魔术方法
        $b = clone $a;//深复制（相当于 值传递，$b修改了$b中的 qq属性值，$a中的qq属性值 没有任何影响）
        $b->qq = 34234;
        dump($a);
        dump($b);*/
    }

}