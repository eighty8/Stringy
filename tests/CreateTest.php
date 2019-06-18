<?php

use function Stringy\create as s;

class CreateTestCase extends \PHPUnit\Framework\TestCase
{
    public function testCreate()
    {
        $stringy = s('foo bar', 'UTF-8');
        $this->assertInstanceOf('Stringy\Stringy', $stringy);
        $this->assertEquals('foo bar', (string) $stringy);
        $this->assertEquals('UTF-8', $stringy->getEncoding());
    }
}
