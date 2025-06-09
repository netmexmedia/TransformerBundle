<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\LowercaseTransformer;
use PHPUnit\Framework\TestCase;

class LowercaseTransformerTest extends TestCase
{
    private LowercaseTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new LowercaseTransformer();
    }

    public function testTransform(): void
    {
        $this->assertSame('hello world', $this->transformer->transform('Hello World'));
        $this->assertSame('abc123', $this->transformer->transform('ABC123'));
        $this->assertSame('', $this->transformer->transform(''));
    }

    public function testReverse(): void
    {
        $this->assertSame('HELLO WORLD', $this->transformer->reverse('hello world'));
        $this->assertSame('ABC123', $this->transformer->reverse('abc123'));
        $this->assertSame('', $this->transformer->reverse(''));
    }
}
