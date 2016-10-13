<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/10/13
 * Time: 15:42
 */

require(__DIR__ . '/BaseFire.php');

class Yii extends \Fire\BaseFire
{
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require(__DIR__ . '/classes.php');
//Yii::$container = new yii\di\Container();
