<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/10/13
 * Time: 15:43
 */

namespace Fire;

defined('Fire_PATH') or define('Fire_PATH', __DIR__);


class BaseFire
{

    public static $classMap = [];
    public static $app;
    public static $aliases = ['@fire' => __DIR__];

    public static function getAlias($alias, $throwException = true)
    {
        return false;
    }

    public static function setAlias($alias, $throwException = true)
    {
        return false;
    }

    public static function getVersion()
    {
        return '2.0.9-dev';
    }

    public static function autoload($className)
    {
        if (isset(static::$classMap[$className])) {
            $classFile = static::$classMap[$className];
            if ($classFile[0] === '@') {
                $classFile = static::getAlias($classFile);
            }
        } elseif (strpos($className, '\\') !== false) {
            $classFile = static::getAlias('@' . str_replace('\\', '/', $className) . '.php', false);
            if ($classFile === false || !is_file($classFile)) {
                return;
            }
        } else {
            return;
        }

        include($classFile);

        if (Fire_DEBUG && !class_exists($className, false) && !interface_exists($className, false) && !trait_exists($className, false)) {
            throw new \Exception("Unable to find '$className' in file: $classFile. Namespace missing?");
        }
    }


}