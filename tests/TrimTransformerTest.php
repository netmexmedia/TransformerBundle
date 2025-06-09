<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\TrimTransformer;
use PHPUnit\Framework\TestCase;

class TrimTransformerTest extends TestCase
{
    private TrimTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new TrimTransformer();
    }

    public function testTransform(): void
    {
        $input = "  Hello World  ";
        $expected = "Hello World";

        $this->assertSame($expected, $this->transformer->transform($input));
    }

    public function testReverse(): void
    {
        $input = "  Hello World  ";

        // reverse() returns the data as is
        $this->assertSame($input, $this->transformer->reverse($input));
    }
}
