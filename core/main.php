<?php
/**
 * Created by PhpStorm.
 * User: zhyupeng
 * Date: 2017/7/16
 * Time: 下午3:24
 * 框架核心方法
 */
namespace core;
class main
{
    public static $classMap = array();
    static public function run()
    {
        display('ok');
        $route = new \core\lib\route();
    }
    static public function load($class)
    {
        //自动加载类库
        //new \core\route()
        //$class = '\core\route();
        //FRAME.'core/route.php'
        if(isset(self::$classMap[$class])){
            //类已经加载过一次,用一个map数组来标识(或者使用require_once)
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = FRAME.'/'.$class.'.php';
            display($file);
            if(is_file($file)){
                include $file;
                //静态属性使用self::
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}