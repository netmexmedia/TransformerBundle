<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class IntegerTransformer implements TransformerInterface
{
    public function transform($data): int
    {
        return (int) $data;
    }

    public function reverse($data): string
    {
        return (string) $data;
    }
}