<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class FloatTransformer implements TransformerInterface
{
    public function transform(mixed $data): float
    {
        return (float) $data;
    }

    public function reverse(float $data): string
    {
        return (string) $data;
    }
}
