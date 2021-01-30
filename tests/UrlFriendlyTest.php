<?php

use Adon988\UrlFriendly\UrlFriendly;
use PHPUnit\Framework\TestCase;

/**
 * UrlFriendlyTest
 * @group group
 * @covers fqcn
 */
class UrlFriendlyTest extends TestCase
{
    /** @test */
    public function testUrlSlug()
    {
        // arrange
        $target = new UrlFriendly();
        $expected = "xxx-xxx-xxx";

        // actual
        $actual = $target->urlSlug("xxx xxx/xxx");
 
        // assert
        $this->assertEquals($expected, $actual);
    }

}
