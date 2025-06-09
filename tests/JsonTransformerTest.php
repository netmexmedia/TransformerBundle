<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\JsonTransformer;
use PHPUnit\Framework\TestCase;

class JsonTransformerTest extends TestCase
{
    private JsonTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new JsonTransformer();
    }

    public function testTransform(): void
    {
        $json = '{"key":"value","num":123,"bool":true}';
        $expected = ['key' => 'value', 'num' => 123, 'bool' => true];
        $this->assertSame($expected, $this->transformer->transform($json));

        $this->assertNull($this->transformer->transform('invalid json'));
        $this->assertNull($this->transformer->transform(null));
    }

    public function testReverse(): void
    {
        $array = ['foo' => 'bar', 'baz' => 42];
        $json = $this->transformer->reverse($array);
        $this->assertJson($json);
        $this->assertStringContainsString('"foo":"bar"', $json);
        $this->assertStringContainsString('"baz":42', $json);

        $this->assertSame('null', $this->transformer->reverse(null));
    }
}
