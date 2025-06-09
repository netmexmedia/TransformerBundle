<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\DateTimeTransformer;
use PHPUnit\Framework\TestCase;

class DateTimeTransformerTest extends TestCase
{
    private DateTimeTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new DateTimeTransformer();
    }

    public function testTransform(): void
    {
        $input = '2025-06-09 14:30:00';
        $dateTime = $this->transformer->transform($input);

        $this->assertInstanceOf(\DateTimeInterface::class, $dateTime);
        $this->assertSame('2025-06-09 14:30:00', $dateTime->format('Y-m-d H:i:s'));
    }

    public function testReverse(): void
    {
        $dateTime = new \DateTimeImmutable('2025-06-09 14:30:00');
        $string = $this->transformer->reverse($dateTime);

        $this->assertSame('2025-06-09 14:30:00', $string);
    }

    public function testTransformWithInvalidStringThrowsException(): void
    {
        $this->expectException(\Exception::class);
        $this->transformer->transform('invalid-date-string');
    }
}
