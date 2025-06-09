<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\UppercaseTransformer;
use PHPUnit\Framework\TestCase;

class UppercaseTransformerTest extends TestCase
{
    private UppercaseTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new UppercaseTransformer();
    }

    public function testTransform(): void
    {
        $input = "hello world";
        $expected = "HELLO WORLD";

        $this->assertSame($expected, $this->transformer->transform($input));
    }

    public function testReverse(): void
    {
        $input = "HELLO WORLD";
        $expected = "hello world";

        $this->assertSame($expected, $this->transformer->reverse($input));
    }
}
