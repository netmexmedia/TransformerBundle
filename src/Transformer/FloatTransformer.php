<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class FloatTransformer implements TransformerInterface
{
    public function transform($data): float
    {
        return (float) $data;
    }

    public function reverse($data): string
    {
        return (string) $data;
    }
}
