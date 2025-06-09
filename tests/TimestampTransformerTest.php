<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\TimestampTransformer;
use PHPUnit\Framework\TestCase;

class TimestampTransformerTest extends TestCase
{
    private TimestampTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new TimestampTransformer();
    }

    public function testTransform(): void
    {
        $timestamp = time();
        $dateTime = $this->transformer->transform($timestamp);

        $this->assertInstanceOf(\DateTimeInterface::class, $dateTime);
        $this->assertEquals($timestamp, $dateTime->getTimestamp());
    }

    public function testReverse(): void
    {
        $timestamp = time();
        $dateTime = new \DateTimeImmutable("@$timestamp");

        $result = $this->transformer->reverse($dateTime);
        $this->assertIsInt($result);
        $this->assertEquals($timestamp, $result);
    }
}
