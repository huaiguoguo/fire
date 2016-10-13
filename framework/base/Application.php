<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/10/13
 * Time: 16:06
 */

namespace Fire\base;
use Fire;

abstract class Application
{


    public function __construct($config)
    {

        if(!isset($config['basePath'])){
            throw new \Exception('basePath不存在');
        }
        
    }

}