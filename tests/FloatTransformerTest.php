<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\FloatTransformer;
use PHPUnit\Framework\TestCase;

class FloatTransformerTest extends TestCase
{
    private FloatTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new FloatTransformer();
    }

    public function testTransform(): void
    {
        $this->assertSame(123.45, $this->transformer->transform('123.45'));
        $this->assertSame(0.0, $this->transformer->transform('abc'));
        $this->assertSame(0.0, $this->transformer->transform(null));
        $this->assertSame(10.0, $this->transformer->transform(10));
    }

    public function testReverse(): void
    {
        $this->assertSame('123.45', $this->transformer->reverse(123.45));
        $this->assertSame('0', $this->transformer->reverse(0.0));
    }
}
