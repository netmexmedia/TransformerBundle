<?php

namespace Netmex\TransformerBundle\Tests\Transformer;

use Netmex\TransformerBundle\Transformer\BooleanTransformer;
use PHPUnit\Framework\TestCase;

class BooleanTransformerTest extends TestCase
{
    private BooleanTransformer $transformer;

    protected function setUp(): void
    {
        $this->transformer = new BooleanTransformer();
    }

    public function testTransformWithString(): void
    {
        $this->assertSame(true, $this->transformer->transform('true'));
        $this->assertSame(false, $this->transformer->transform('false'));
    }

    public function testTransformWithBool(): void
    {
        $this->assertSame(true, $this->transformer->transform(true));
        $this->assertSame(false, $this->transformer->transform(false));
    }

    public function testReverse(): void
    {
        $this->assertSame('true', $this->transformer->reverse(true));
        $this->assertSame('false', $this->transformer->reverse(false));
    }
}
