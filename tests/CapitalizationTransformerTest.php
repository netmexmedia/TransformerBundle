<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\CapitalizationTransformer;
use PHPUnit\Framework\TestCase;

class CapitalizationTransformerTest extends TestCase
{
    private CapitalizationTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new CapitalizationTransformer();
    }

    public function testTransform(): void
    {
        $this->assertSame('HELLO', $this->transformer->transform('hello'));
    }

    public function testReverse(): void
    {
        $this->assertSame('hello', $this->transformer->reverse('HELLO'));
    }
}
