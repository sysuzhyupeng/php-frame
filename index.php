<?php
/**
 * Created by PhpStorm.
 * User: zhyupeng
 * Date: 2017/7/16
 * 入口文件:
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */
//定义目录常量
define('FRAME', realpath('./'));
define('CORE', FRAME.'/core');
define('APP', FRAME.'/app');

define('DEBUG', true);

if(DEBUG){
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

//引入公共函数
include CORE.'/common/function.php';
//引入核心函数
include CORE.'/main.php';

//当new的类不存在的时候调用这个方法
spl_autoload_register('\core\main::load');

//run之后去new一个类,不存在的时候调用上一个方法
\core\main::run();