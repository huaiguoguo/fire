<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/10/13
 * Time: 16:06
 */

namespace Fire\base;

use Fire;
use Whoops;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;

abstract class Application
{
    public function __construct($config)
    {
        $run = new Whoops\Run;
        $run->pushHandler(new PrettyPageHandler);
        $run->register();
        if (!isset($config['basePath'])) {
            throw new \Exception('basePath不存在');
        }
    }
}