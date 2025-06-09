<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\IntegerTransformer;
use PHPUnit\Framework\TestCase;

class IntegerTransformerTest extends TestCase
{
    private IntegerTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new IntegerTransformer();
    }

    public function testTransform(): void
    {
        $this->assertSame(123, $this->transformer->transform('123'));
        $this->assertSame(0, $this->transformer->transform('abc'));  // Non-numeric string casts to 0
        $this->assertSame(0, $this->transformer->transform(null));   // Null casts to 0
        $this->assertSame(10, $this->transformer->transform(10.7));  // Float truncated to int
    }

    public function testReverse(): void
    {
        $this->assertSame('123', $this->transformer->reverse(123));
        $this->assertSame('0', $this->transformer->reverse(0));
    }
}
