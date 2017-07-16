<?php
/**
 * Created by PhpStorm.
 * User: zhyupeng
 * Date: 2017/7/16
 * Time: 下午3:34
 */
namespace core\lib;
class route
{
    /**
     * route constructor.
     */
    public function __construct()
    {
        display('route ok');
        //xxx.com/index.php/index/index
        //xxx.com/index/index在htaccess文件中映射成上面的规则
        /*
         * 1.隐藏index.php
         * 2.获取URL参数部分
         * 3.返回对应控制器与方法
         */

    }
}