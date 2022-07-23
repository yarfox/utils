<?php
/**
 * The file is part of the utils.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/23 17:15
 */

namespace Yarfox\Utils\Test\Facade;

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $this->assertEquals('test', ExampleFacade::test());
    }
}
