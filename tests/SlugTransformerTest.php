<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\SlugTransformer;
use PHPUnit\Framework\TestCase;

class SlugTransformerTest extends TestCase
{
    private SlugTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new SlugTransformer();
    }

    public function testTransform(): void
    {
        $input = "Hello, World! This is a test.";
        $expected = "hello-world-this-is-a-test";

        $this->assertSame($expected, $this->transformer->transform($input));
    }

    public function testReverse(): void
    {
        $input = "hello-world-this-is-a-test";
        $expected = "hello world this is a test";

        $this->assertSame($expected, $this->transformer->reverse($input));
    }
}
