<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\NullableTransformer;
use Netmex\TransformerBundle\Contracts\TransformerInterface;
use PHPUnit\Framework\TestCase;

class NullableTransformerTest extends TestCase
{
    private NullableTransformer $nullableTransformer;
    private TransformerInterface $innerTransformer;

    protected function setUp(): void
    {
        // Create a simple mock for the inner transformer
        $this->innerTransformer = $this->createMock(TransformerInterface::class);
        $this->nullableTransformer = new NullableTransformer($this->innerTransformer);
    }

    public function testTransformReturnsNullForNullInput(): void
    {
        $this->assertNull($this->nullableTransformer->transform(null));
    }

    public function testReverseReturnsNullForNullInput(): void
    {
        $this->assertNull($this->nullableTransformer->reverse(null));
    }

    public function testTransformDelegatesToInnerTransformer(): void
    {
        $input = 'some data';
        $transformed = 'transformed data';

        $this->innerTransformer
            ->expects($this->once())
            ->method('transform')
            ->with($input)
            ->willReturn($transformed);

        $this->assertSame($transformed, $this->nullableTransformer->transform($input));
    }

    public function testReverseDelegatesToInnerTransformer(): void
    {
        $input = 'some data';
        $reversed = 'reversed data';

        $this->innerTransformer
            ->expects($this->once())
            ->method('reverse')
            ->with($input)
            ->willReturn($reversed);

        $this->assertSame($reversed, $this->nullableTransformer->reverse($input));
    }
}
