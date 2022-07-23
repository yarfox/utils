<?php
/**
 * The file is part of the utils.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/23 17:15
 */

namespace Yarfox\Utils\Test\Facade;

use Yarfox\Utils\Facade\AbstractFacade;

/**
 * @method static test()
 */
class ExampleFacade extends AbstractFacade
{
    /**
     * @inheritDoc
     */
    protected static function getProcessor(): mixed
    {
        return new class {
            public function test(): string
            {
                return 'test';
            }
        };
    }
}
