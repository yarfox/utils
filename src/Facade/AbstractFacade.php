<?php
/**
 * This file is part of container.
 *
 * @author      anhoder <anhoder@88.com>
 * @created_at  2021/8/22 8:19 下午
 */

namespace Yarfox\Utils\Facade;

use ReflectionException;
use RuntimeException;

/**
 * AbstractFacade class.
 */
abstract class AbstractFacade
{
    /**
     * @var object|null
     */
    private static ?object $processor = null;

    /**
     * @param string $name
     * @param array $args
     * @return mixed
     * @throws ReflectionException|
     */
    public static function __callStatic(string $name, array $args)
    {
        $processor = static::getProcessor();
        if (!$processor) {
            throw new RuntimeException("Processor {$processor} not exists!");
        }

        static::$processor = $processor;

        return static::$processor->{$name}(...$args);
    }

    /**
     * @return mixed
     */
    abstract protected static function getProcessor(): mixed;
}
