<?php
/**
 * Created by PhpStorm.
 * User: zhyupeng
 * Date: 2017/7/16
 * Time: 下午2:54
 */
function display($var){
    if(is_bool($var)){
        var_dump($var);
    } else if(is_null($var)){
        var_dump(NULL);
    } else {
        echo "<p style='font-size: 20px;'>". print_r($var, true) ."</p>";
    }
}